@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="form-group" method="POST" action="../entrenamientos">
        @csrf
            <div class="form-group">
                <h2 for="exampleFormControlSelect1" class="text-center">Actividad</h2>
                    <select id="actividad" class="form-control form-control-lg" name="actividad">
                        <option value="Ergometro">Ergometro</option>
                        <option value="Correr">Correr</option>
                        <option value="Press Banca">Press Banca</option>
                        <option value="Media Sentadilla">Media Sentadilla</option>
                        <option value="Remo Tumbado">Remo Tumbado</option>
                        <option value="Remo Agua">Remo Agua</option>
                    </select>
            </div>

            <div class="form-group">
                <h2 for="exampleFormControlSelect1" class="text-center">Parámetro</h2>
                    <select id="parametros" class="form-control form-control-lg" name="parametro">
                        <option value="WTS">WTS</option>
                        <option value="Metros">Metros</option>
                        <option value="KM">Km</option>
                        <option value="Kg">Kg</option>
                        <option value="Minutos">Minutos</option>
                        <option value="Horas">Horas</option>
                    </select>
            </div>

            <div class="form-group">
                <h2 for="exampleFormControlSelect1" class="text-center">Valor</h2>
                <input name="valor" type="text" class="form-control" placeholder="Introduce un Valor">
            </div>
            
            <!-- Botones -->
        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#actividadModal">
        Añadir Actividad
        </button> <br>
        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#parametrosModal">
        Añadir Parámetro  
        </button> <br>
        <button type="submit" class="btn btn-dark btn-lg btn-block">Guardar</button>
    
        <!-- Modal-Actividad -->
        <div class="modal fade" id="actividadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Actividad </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input id="nuevaActividad" class="form-control" type="text">
            </div>
            <div class="modal-footer">
                <button id="añadirActividad" type="button" class="btn btn-primary">Añadir</button>
            </div>
            </div>
        </div>
        </div>
    
            <!-- Modal-Parámetros -->
            <div class="modal fade" id="parametrosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir Parametro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input id="nuevoParametro" class="form-control" type="text">
            </div>
            <div class="modal-footer">
                <button id="añadirParametro" type="button" class="btn btn-primary">Añadir</button>
            </div>
            </div>
        </div>
        </div>
        
        </form>
    </div>
    
<script>

$( document ).ready(function() {
    //Actividades
   $("#añadirActividad").click(function() {
        x = $("#nuevaActividad").val();
        $('#actividad').append($('<option>', {value:x, text:x}));
            $("#nuevaActividad").val("");
   });
   //Parametros
   $("#añadirParametro").click(function() {
        y = $("#nuevoParametro").val();
        $('#parametros').append($('<option>', {value:y, text:y}));
            $("#nuevoParametro").val("");
   });
});

</script>


@endsection