<?php

namespace App\Http\Controllers;

use App\Models\Ciencias;
use Illuminate\Http\Request;

class Examen2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $tema2 = Ciencias::all();
        return view('ciencias.index')->with('tema2',$tema2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('ciencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tema2 = new Ciencias();
        $tema2->pregunta = $request ->get('pregunta');
        $tema2->opcion_a = $request ->get('opcion_a');
        $tema2->opcion_b = $request ->get('opcion_b');
        $tema2->opcion_c = $request ->get('opcion_c');
        $tema2->respuesta = $request ->get('respuesta');

        $tema2->save();

        return redirect('/ciencias');
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
        $tema = Ciencias::find($id);
        return view('ciencias.edit')->with('tema',$tema);
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
        $tema = Ciencias::find($id);

        $tema->pregunta = $request ->get('pregunta');
        $tema->opcion_a = $request ->get('opcion_a');
        $tema->opcion_b = $request ->get('opcion_b');
        $tema->opcion_c = $request ->get('opcion_c');
        $tema->respuesta = $request ->get('respuesta');

        $tema->save();

        return redirect('/ciencias'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tema = Ciencias::find($id);
        $tema->delete();

        return redirect('/ciencias'); 
    }
}
