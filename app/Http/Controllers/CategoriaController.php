<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class CategoriaController extends Controller
{
    //
    public function index()
    {
        $datos = Post::select(
            'posts.id', 
            'posts.id_user', 
            'posts.categoria', 
            'posts.contenido', 
            'posts.tags', 
            'posts.created_at', 
            'posts.updated_at', 
            'users.name'
        )->join('users', 'users.id', '=', 'posts.id_user')
        ->orderBy('categoria', 'ASC')->get();
        $categorias = Post::select('categoria')->groupBy('categoria')->orderBy('categoria', 'ASC')->get();
        return view('categorias', ['posts' => $datos, 'categorias' => $categorias]);
        // return $categorias;
    }
    public function showadmin()
    {
        $datos = Post::select(
            'posts.id', 
            'posts.id_user', 
            'posts.categoria', 
            'posts.contenido', 
            'posts.tags', 
            'posts.created_at', 
            'posts.updated_at', 
            'users.name'
        )->join('users', 'users.id', '=', 'posts.id_user')
        ->orderBy('categoria', 'ASC')->get();
        $categorias = Post::select('categoria')->groupBy('categoria')->orderBy('categoria', 'ASC')->get();
        return view('admin.dashboard-new', ['posts' => $datos, 'categorias' => $categorias]);
        // return $categorias;
    }
    public function show($nombre)
    {
        $datos = Post::select(
            'posts.id', 
            'posts.id_user', 
            'posts.categoria', 
            'posts.contenido', 
            'posts.tags', 
            'posts.created_at', 
            'posts.updated_at', 
            'users.name'
        )->join('users', 'users.id', '=', 'posts.id_user' )
        ->where('categoria', $nombre)->get();
        return view('categoria_show', ['data' => $datos], );
    }
}
