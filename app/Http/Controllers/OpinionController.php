<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $opiniones = DB:: table('opinions')->where('user_id',Auth::id());

        return view('comments.index'); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /* $property_id=$request['property_id'];
        return view('comments.create'); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* $opiniones =Opinion::find($id);
        return view('opiniones.show'); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        /* $property_id = $request['property_id'];
        return view('opiniones.edit'); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opinion $opinion)
    {
        /* $opinion->fill($request->input());
        $opinion->save(); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opinion $opinion)
    {
        /* $opinion ->delete(); */
    }
}