<?php

namespace RemoApp\Http\Controllers;
use RemoApp\Documentos;
use Illuminate\Http\Request;

class documentosController extends Controller
{
    //
    public function documentos(){
        $documentos = Documentos::select('name','mime')->get();
        return view("documentos")->with('documentos', $documentos);
    }

    public function documentosFecha(){
        $documentosFecha = Documentos::select('name','mime')-> where('created_at', 'LIKE', '2019-04-27 00:00:00')->get();
        return view("documentos")->with('documentos', $documentosFecha);
    }
}

