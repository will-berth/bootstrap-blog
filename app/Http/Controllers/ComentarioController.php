<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Post;

class ComentarioController extends Controller
{
    //
    public function show(Request $request)
    {
        $userAuth = auth()->user();
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
        
        if(!$userAuth){
            return 'error';
        }
        return $comentarios;
    }

    public function create(Request $request){
        $coment = Comentario::create($request->all());
        $post = Post::where('id', $request->id_post)->increment('comentarios_cant', 1);

        return $request->id_post;
    }
}
