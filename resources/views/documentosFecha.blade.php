@section('content')
<div class="container">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <div class="row col-md-11" style="margin-left:3em; margin-right:3em;">
        <div class="page-header text-left ">
            @extends('layouts.menuMesociclos')
            @extends('layouts.filtros')
            <h2>DOCUMENTOS</h2>
            <table>
            <tr>
                <th>Nombre</th>
                <th>Extensión</th>
            </tr>
                @foreach ($documentos as $documento)
                    <div class="text-left col-md-11 ">
                        <tr>
                            <td>{{$documento['name']}}</td>
                            <td>{{$documento['mime']}}</td>
                        </tr>
                    </div>
                @endforeach
            </table>
        </div>
        </div>
    </div>
</div>
@endsection