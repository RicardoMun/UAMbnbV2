<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseRequest;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = DB::table('houses')->get();

        return view('houses.index',compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('houses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HouseRequest $request)
    {
        $house= new House();
        if( $request->hasFile('fotos')){
            $file = $request->file('fotos');
            $nombreArchivo = time() . '-' . $file->getClientOriginalName();
            $destinoImagen = 'images/';
            $archivoAceptado = $request->file('fotos')->move($destinoImagen, $nombreArchivo);
            $house->fotos = $destinoImagen . $nombreArchivo;
        }

        $house->fill($request->input());
        $house->user_id = Auth::id();
        $house->save();

        return redirect(route('home')) -> with (['status'=> 'EL INMUEBLE SE HA CREADO CON EXITO']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        return view('inmuebles.edit',compact('inmueble'))-> with (['status'=> 'EL INMUEBLE SE HA EDITADO CON EXITO']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(HouseRequest $request, House $house)
    {
        if ($house->user_id == Auth::id()) {
            $house->fill($request->input());
            $house->save();
            //actualizamos
            return redirect(route('houses', $house->user_id)); //route redirecciona por el nombre de la ruta

        }else{
            return view('layouts.validation');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        if($house->user_id == Auth::id()){
            $house->delete();
            return redirect(route('inmuebles', $house->user_id))->with('status',"El inmueble se elimino correctamente");
        }else{

            return view('layouts.validation');

        }
    }
}
