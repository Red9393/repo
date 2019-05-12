<?php

namespace RemoApp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class historialController extends Controller
{
    public function index(){
        $user = Auth::user();
        // Si el usuario está autenticado recojo sus datos y los devuelvo
        if ($user !== null) {
            // $entrenamientos = Entrenamientos::where('id_usuario', $user->id);
            $entrenamientos = DB::table('entrenamiento')
            ->where('id_usuario', $user->id)
            ->join('actividad', 'entrenamiento.id_actividad', '=', 'actividad.id')
            ->join('parametros', 'entrenamiento.id_parametro', '=', 'parametros.id')
            ->select('entrenamiento.fecha', 'entrenamiento.valor_parametro', 'actividad.name as actividad_name', 'parametros.name as parametros_name')
            ->get();
            if (!$entrenamientos->isEmpty()) { 
                return view('historial', array('entrenamientos' => $entrenamientos));
            } else {
                return view('historial');
            }
            
        } else {
            // Si el usuario no está autenticado no devuelvo sus datos
            return view('historial');
        }
    }

}
