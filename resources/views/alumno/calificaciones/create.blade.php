@extends('layouts.plantillabase');

@section('contenido')

<h2>Resultados</h2>

<div >
<form action="/resumen" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Número de Control</label>
        <input id ="control" name="control" type="text" class="form-control" value="{{Auth::user()->id}}" tabindex="1" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id ="nombre" name="nombre" type="text" class="form-control" value="{{Auth::user()->name}}" tabindex="2" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Calificación Literatura</label>
        <input id ="literatura" name="literatura" type="text" class="form-control" value="" tabindex="3" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Calificación Matemáticas</label>
        <input id ="mates" name="mates" type="text" class="form-control" value="" tabindex="4" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Calificación Ciencias</label>
        <input id ="ciencias" name="ciencias" type="text" class="form-control" value="" tabindex="5" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Promedio Final</label>
        <input id ="pfinal" name="pfinal" type="text" class="form-control" value="" tabindex="6" >
    </div>
    <button type="submit" class="btn btn-success" tabindex="7">Salir</button>
    

</form>
</div>

<script>
    
    var prom = 0;
    var fn = 0;
    var c1 = window.onload = localStorage.getItem("cal1");
    var c2 = window.onload = localStorage.getItem("cal2");
    var c3 = window.onload = localStorage.getItem("cal3");

    var n1 = Number(c1);
    var n2 = Number(c2);
    var n3 = Number(c3);

    prom = (n1+n2+n3)/3;
    
    document.getElementById("literatura").value = n1;
    document.getElementById("mates").value = n2;
    document.getElementById("ciencias").value = n3;
    document.getElementById("pfinal").value = prom;

    

</script>

<script>

    function cali3(){

        alert(window.onload = localStorage.getItem("cal3"));
    }

</script>

@endsection