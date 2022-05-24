<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PropertyRequest;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = DB::table('properties')->get();

        return view('properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request)
    {
        $property = new Property();

        if( $request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $filePath = '/public/images';
            $fileAccepted = $request->file('image')->move($filePath, $fileName);
            $property->image = $filePath . $fileName;
        }

        $property->fill($request->input());
        $property->user_id = Auth::id();
        $property->save();

        return redirect(route('home')) -> with (['status'=> 'EL INMUEBLE SE HA CREADO CON EXITO']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('properties.edit', compact('property')) -> with (['status'=> 'EL INMUEBLE SE HA EDITADO CON EXITO']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequest $request, Property $property)
    {
        if ($property->user_id == Auth::id()) {
            $property->fill($request->input());
            $property->save();
            //actualizamos
            return redirect(route('properties.index', $property->user_id)); //route redirecciona por el nombre de la ruta
        }else{
            return view('layouts.validation');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        if($property->user_id == Auth::id()){
            $property->delete();
            return redirect(route('properties.index', $property->user_id))->with('status',"El inmueble se elimino correctamente");
        }else{

            return view('layouts.validation');

        }
    }
}
