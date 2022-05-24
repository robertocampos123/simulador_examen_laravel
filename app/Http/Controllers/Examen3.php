<?php

namespace App\Http\Controllers;

use App\Models\Matematicas;
use Illuminate\Http\Request;

class Examen3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tema3 = Matematicas::all();
        return view('matematicas.index')->with('tema3',$tema3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matematicas.create');
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

        $tema3 = new Matematicas();
        $tema3->pregunta = $request ->get('pregunta');
        $tema3->opcion_a = $request ->get('opcion_a');
        $tema3->opcion_b = $request ->get('opcion_b');
        $tema3->opcion_c = $request ->get('opcion_c');
        $tema3->respuesta = $request ->get('respuesta');

        $tema3->save();

        return redirect('/matematicas');
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
    public function edit($id)
    {
        $tema = Matematicas::find($id);
        return view('matematicas.edit')->with('tema',$tema);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tema = Matematicas::find($id);

        $tema->pregunta = $request ->get('pregunta');
        $tema->opcion_a = $request ->get('opcion_a');
        $tema->opcion_b = $request ->get('opcion_b');
        $tema->opcion_c = $request ->get('opcion_c');
        $tema->respuesta = $request ->get('respuesta');

        $tema->save();

        return redirect('/matematicas'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tema = Matematicas::find($id);
        $tema->delete();

        return redirect('/matematicas');
    }
}
