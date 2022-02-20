<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    //
    public function show(Request $request)
    {
        $comentarios = Comentario::select(
            'comentarios.id',
            'comentarios.id_post',
            'comentarios.id_user',
            'comentarios.texto',
            'comentarios.created_at',
            'comentarios.updated_at',
            'users.name',
        )->join('users', 'users.id', '=', 'comentarios.id_user')
        ->where('id_post', $request->id)->get();
        return $comentarios;
    }

    public function create(Request $request){
        $coment = Comentario::create($request->all());

        return 'success';
    }
}
