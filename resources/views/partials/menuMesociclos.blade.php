<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{csrf_token()}}">

  <!-- Titulo -->
  <title>{{ config('app.name') }}</title>

  <!-- Scripts -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/vue.resource/1.0.3/vue-resource.min.js"></script>
  {{--
  <script src="{{asset('js/user-function/app.js')}}"></script> --}}

  <!-- Styles -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" href="{{ asset('logo.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
  {{-- <link rel="stylesheet" type="text/css" href="css/menu.css"> --}}
</head>

<body>
  <div class="card text-center">
    <div class="card-header">
        <ul>
            <li class="nav-item {{ request()->is('mesociclos') ? 'active' : '' }}">
                <a style="color:#746E6E;"class="nav-link" href="{{ route('mesociclos') }}">Mesociclos</a>
            </li>
            <li class="nav-item {{ request()->is('entrenamientos') ? 'active' : '' }}">
                <a style="color:#746E6E;"class="nav-link" href="{{ route('entrenamientos') }}">Entrenamientos</a>
            </li>
            <li class="nav-item {{ request()->is('datosPersonales') ? 'active' : '' }}">
                <a style="color:#746E6E;"class="nav-link" href="{{ route('datosPersonales') }}">Datos personales</a>
            </li>
            <li class="nav-item {{ request()->is('alineacion') ? 'active' : '' }}">
                <a style="color:#746E6E;"class="nav-link" href="{{ route('alineacion') }}">Alineación</a>
            </li>
        </ul>
    </div>
</div>
</body>
