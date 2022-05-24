@extends('layouts.plantillabase');

@section('contenido')

<h1>Calificaciones</h1>

<table class="table table-light table-striped mt-4">
<thead>
    <tr>
        <th scope="col">ID Examen</th>
        <th scope="col">Matrícula</th>
        <th scope="col">Nombre</th>
        <th scope="col">Literatura</th>
        <th scope="col">Matemáticas</th>
        <th scope="col">Ciencias</th>
        <th scope="col">Promedio Final</th>
    </tr>
</thead>
<tbody>
    @foreach ($res as $res_alu)
    <tr>
        <td>{{$res_alu->id}}</td>
        <td>{{$res_alu->control}}</td>
        <td>{{$res_alu->nombre}}</td>
        <td>{{$res_alu->literatura}}</td>
        <td>{{$res_alu->mates}}</td>
        <td>{{$res_alu->ciencias}}</td>
        <td>{{$res_alu->pfinal}}</td>
        <td>
            <form action="{{route ('resumen.destroy',$res_alu->id)}}" method="POST">
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