<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;

class Examen1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tema1 = Tema::all();
        return view('examen.index')->with('tema1',$tema1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('examen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tema1 = new Tema();
        $tema1->pregunta = $request ->get('pregunta');
        $tema1->opcion_a = $request ->get('opcion_a');
        $tema1->opcion_b = $request ->get('opcion_b');
        $tema1->opcion_c = $request ->get('opcion_c');
        $tema1->respuesta = $request ->get('respuesta');

        $tema1->save();

        return redirect('/tema');
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
        $tema = Tema::find($id);
        return view('examen.edit')->with('tema',$tema);
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
        $tema = Tema::find($id);

        $tema->pregunta = $request ->get('pregunta');
        $tema->opcion_a = $request ->get('opcion_a');
        $tema->opcion_b = $request ->get('opcion_b');
        $tema->opcion_c = $request ->get('opcion_c');
        $tema->respuesta = $request ->get('respuesta');

        $tema->save();

        return redirect('/tema'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tema = Tema::find($id);
        $tema->delete();

        return redirect('/tema'); 
    } 
}
