<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

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
        $post = new Post();
        $post = $request;
        if($request->hasFile("imagen")){
            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug($request->id_user."-".$request->contenido).".".$imagen->guessExtension();
            $ruta = public_path("img/posts/");

            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(),$ruta.$nombreimagen);

            $postQuery = Post::create([
                'id_user' => $request->id_user,
                'categoria' => $request->categoria,
                'contenido' => $request->contenido,
                'imagen' => $nombreimagen,
                'tags' => $request->tags,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
                'comentarios_cant' => 0,
            ]);
        }
        // return $request->imagen;
        return 'exito';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $userId = auth()->user();
        return $userId;
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
        $userId = auth()->user();
        return view('view-post', ['datosPost' => $datos, 'auth'=> $userId]);
        // return $datos;
    }

    public function adminposts(Request $request ){
        $userId = auth()->user();
        $datos = Post::select('contenido', 'categoria', 'tags', 'created_at')->where('id_user', $userId->id)->get();
        $json['data'] = [];
        if($datos) {
            $json['data'] = $datos;
        }
        
        $i = 0;
        while ($i < count($json['data'])) {
            $newDate = date('Y-m-d', strtotime($json['data'][$i]->created_at));
            $json['data'][$i]->newdate = $newDate;
            $i++;
        }
        return $json;

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
