@extends('layouts.plantillabase');

@section('contenido')

<h1>Preguntas Ciencias</h1>
<a href="ciencias/create" class="btn btn-primary">Crear</a>

<table class="table table-light table-striped mt-4">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Pregunta</th>
        <th scope="col">Opción A</th>
        <th scope="col">Opción B</th>
        <th scope="col">Opción C</th>
        <th scope="col">Respuesta</th>
    </tr>
</thead>
<tbody>
    @foreach ($tema2 as $tema)
    <tr>
        <td>{{$tema->id}}</td>
        <td>{{$tema->pregunta}}</td>
        <td>{{$tema->opcion_a}}</td>
        <td>{{$tema->opcion_b}}</td>
        <td>{{$tema->opcion_c}}</td>
        <td>{{$tema->respuesta}}</td>
        <td>
            <form action="{{route ('ciencias.destroy',$tema->id)}}" method="POST">
            <a href="/ciencias/{{$tema->id}}/edit" class="btn btn-info">Editar</a>
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection