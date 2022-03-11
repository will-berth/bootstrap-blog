<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\RespuestaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/aboutus', function () {
    return view('quienessomos');
});
// Route::get('/admin-post', function () {
//     return view('admin.posts');
// });
// Route::get('/create-post', function () {
//     return view('admin.create-post');
// });
// Route::get('/create-user', function () {
//     return view('admin.create-user');
// });
Route::get('/preguntas', function () {
    return view('preguntas');
});
Route::get('/quienessomos', function () {
    return view('quienessomos');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('admin.dashboard-new');
    return route('publicaciones');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin-post', function () {
    return view('admin.posts');
})->name('admin-post');
Route::middleware(['auth:sanctum', 'verified'])->get('/create-post', function () {
    return view('admin.create-post');
})->name('create-post');
Route::middleware(['auth:sanctum', 'verified'])->get('/create-user', function () {
    return view('admin.create-user');
})->name('create-user');

// Ruta para limpiar cache del proyecto en el hosting
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
Route::post('/comentarioTest', [ComentarioController::class, 'show'])->name('comentari.post');
Route::post('/addComentario', [ComentarioController::class, 'create'])->name('addComentario');
Route::post('/addRespuesta', [RespuestaController::class, 'create'])->name('addRespuesta');
Route::post('/respuestaTest', [RespuestaController::class, 'show'])->name('resp.post');

Route::get('/post/busca', [PostController::class, 'index'])->name('post.buscar');
Route::post('/post-create', [PostController::class, 'create'])->name('post.create');
Route::put('/post/update', [PostController::class, 'update'])->name('post.up');
// en ajax se llamara la ruta post.buscar como url

Route::get('/post/{id}', [PostController::class, 'show']);
Route::get('/categoria/{nombre}', [CategoriaController::class, 'show']);
Route::get('/categoria', [CategoriaController::class, 'index']);
Route::get('/check-user', [PostController::class, 'store']);
Route::get('/dashboard', [CategoriaController::class, 'showadmin'])->name('publicaciones');


Route::post('/post-admin', [PostController::class, 'adminposts'])->name('post.admin');
