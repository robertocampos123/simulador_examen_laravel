@extends('layouts.plantillabase');

@section('contenido');

<h2>Examen de Matemáticas</h2>

<script>
    const respuesta = [];
    const id = [];
    var score = 0;
    var cal   = 0;
    var num   = 0;
</script>

<form action="alumno/mate" class="form-horizontal" method="POST">
    @csrf

    @foreach ($tema4 as $tema)

    @php($n=1)
    <div class="mb-3">
    <label>{{$tema->pregunta}}</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="r{{$tema->id}}" id="1" value="A" >
    <label class="form-check-label" for="exampleRadios1">
    A) {{$tema->opcion_a}}
    </label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="r{{$tema->id}}" id="2" value="B">
    <label class="form-check-label" for="exampleRadios2">
    B) {{$tema->opcion_b}}
    </label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="r{{$tema->id}}" id="3" value="C" >
    <label class="form-check-label" for="exampleRadios3">
    C) {{$tema->opcion_c}}
    </label>
    </div>
    </div>

    <script>
        respuesta.push("{{$tema->respuesta}}")
        id.push("{{$tema->id}}")
        n ++;
    </script>

    
    @endforeach

    
    <a href="/examen_ciencias" class="btn btn-success" tabindex="6" onclick="calificar();" >Guardar</a>
   
    

    <script>

        function calificar(){
           
           var res1 = $("input:radio[name='r1']:checked").val();
           var res2 = $("input:radio[name='r2']:checked").val();
           var res3 = $("input:radio[name='r3']:checked").val();
           var res4 = $("input:radio[name='r4']:checked").val();
           var res5 = $("input:radio[name='r5']:checked").val();
           
           if (respuesta[0] == res1){
               score = score + 1 ;
           }if (respuesta[1] == res2){
               score = score + 1 ;
           }if (respuesta[2] == res3){
               score = score + 1 ;
           }if (respuesta[3] == res4){
               score = score + 1 ;
           }if (respuesta[4] == res5){
               score = score + 1 ;
           }

           cal = score*(100/id.length);
           //alert("La calificación es:"+ cal);
           window.onload = localStorage.setItem("cal2",cal);
           score = 0;
        }

    </script>

</form>


@endsection

