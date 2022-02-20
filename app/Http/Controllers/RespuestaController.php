<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respuesta;

class RespuestaController extends Controller
{
    //
    public function show(Request $request)
    {
        $respuestas = Respuesta::select(
            'respuestas.id',
            'respuestas.id_user',
            'respuestas.id_comentario',
            'respuestas.texto',
            'respuestas.created_at',
            'respuestas.updated_at',
            'users.name',
        )->join('users', 'users.id', '=', 'respuestas.id_user')
        ->where('id_comentario', $request->id)->get();
        return $respuestas;
    }

    public function create(Request $request){
        $coment = Respuesta::create($request->all());

        return 'respuesta exitosa';
    }
}
