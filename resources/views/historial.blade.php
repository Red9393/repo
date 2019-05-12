@extends('layouts.app')

@section('content')
<script>
$( document ).ready(function() {
    $('#especificDataTable').DataTable({
       // Mirar esto select: true,
    });

    $( "#datepicker1" ).datepicker();
    $( "#datepicker2" ).datepicker();

    
    $('input[type="radio"]').click(function () {
        if ($(this).attr("value") == "fechaConcreta") {
            $("#datepicker1").show('slow');
            $("#datepicker2").hide();
            $("#datepicker2space").show();
            $("#especificData").show('slow'); 
            $("#rangeData").hide(); 
        }
        if ($(this).attr("value") == "fechaRango") {
            $("#datepicker1").show('slow');
            $("#datepicker2").show('slow'); 
            $("#datepicker2space").hide();   
            $("#especificData").hide();
            $("#rangeData").show('slow'); 
        }
    });

    $("#datepicker2").hide();
    $("#datepicker2space").show();
    $("#especificData").show(); 
    $("#rangeData").hide(); 
    
});
</script>

<div class="container">
    <div class="row">
        <div id="datepicker1" class="col-md-4"></div>
        <div id="datepicker2" class="col-md-4"></div>
        <div id="datepicker2space" class="col-md-4"></div>
        <div class="col-md-4">
            <div class="row">
                <div class="form-check col-md-12">
                    <input class="form-check-input" type="radio" name="tipoFecha" id="tipoFecha1" value="fechaConcreta" checked>
                    <label class="form-check-label" for="tipoFecha1">
                        Fecha Concreta
                    </label>
                </div>
                <div class="form-check col-md-12">
                    <input class="form-check-input" type="radio" name="tipoFecha" id="tipoFecha2" value="fechaRango">
                    <label class="form-check-label" for="tipoFecha2">
                        Rango de fechas
                    </label>
                </div>
            </div>
        </div>
    </div>
    <hr class="pageDivider">
    <div id="especificData" class="row">
        <table id="especificDataTable" class="display">
            <thead>
                <tr>
                    <th>Actividad</th>
                    <th>Valor</th>
                    <th>Parámetro</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($entrenamientos))
                    @foreach ($entrenamientos as $entrenamiento)
                    <tr>
                        <td>{{ $entrenamiento->actividad_name }}</td>
                        <td>{{ $entrenamiento->valor_parametro }}</td>
                        <td>{{ $entrenamiento->parametros_name }}</td>
                        <td>{{ $entrenamiento->fecha }}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td>Sin definir o nula</td>
                        <td>Sin definir o nula</td>
                        <td>Sin definir o nula</td>
                        <td>Sin definir o nula</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div id="rangeData" class="row">
        Range Data
    </div>
</div>
@endsection