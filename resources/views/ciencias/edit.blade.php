@extends('layouts.plantillabase');

@section('contenido')

<h2>Crear Pregunta</h2>

<form action="/ciencias/{{$tema->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Pregunta</label>
        <input id ="pregunta" name="pregunta" type="text" class="form-control" value="{{$tema->pregunta}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Opción A</label>
        <input id ="opcion_a" name="opcion_a" type="text" class="form-control" value="{{$tema->opcion_a}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Opción B</label>
        <input id ="opcion_b" name="opcion_b" type="text" class="form-control" value="{{$tema->opcion_b}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Opción C</label>
        <input id ="opcion_c" name="opcion_c" type="text" class="form-control" value="{{$tema->opcion_c}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Respuesta</label>
        <input id ="respuesta" name="respuesta" type="text" class="form-control" value="{{$tema->respuesta}}">
    </div>
    <a href="/ciencias" class="btn btn-primary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-secondary" tabindex="6">Guardar</button>

</form>

@endsection