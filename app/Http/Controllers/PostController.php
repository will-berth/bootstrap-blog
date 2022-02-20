<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Post::all();
        return $datos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $validate = $request->validate([
        //     'id_user' => 'required',
        //     'categoria' => 'required',
        //     'contenido' => 'required',
        //     'tags' => 'required',
        //     'created_at' => 'required',
        //     'updated_at' => 'required',
        // ]);
        $post = Post::create($request->all());

        //
        // $post = Post::create([
        //     'id_user' => 1,
        //     'categoria' => 'Layouts',
        //     'contenido' => 'NOMBRE SLFKJ',
        //     'imagen' => 'sdjfhsjd',
        //     'tags' => 'ayuda,bootstrap,layouts',
        //     'created_at' => '14-02-2022',
        //     'updated_at' => '14-02-2022'
        // ]);
        // $data = \DB::table('posts')->get();
        return 'exito';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $datos = Post::where('id', $id)->get();
        return view('view-post', ['datosPost' => $datos]);
        // return $datos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $post = Post::find($request['id']);
        $post->fill($request->all())->save();

        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getPost(Request $request)
    {
        $id = $request->input('id');
        if(true){
            return true;
        }
    }
}
