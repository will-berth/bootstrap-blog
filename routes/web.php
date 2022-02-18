<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/categorias', function () {
    return view('categorias');
});
Route::get('/view/post', function () {
    return view('view-post');
});
Route::get('/aboutus', function () {
    return view('quienessomos');
});
Route::get('/componentes', function () {
    return view('categoria_componentes');
});
Route::get('/layouts', function () {
    return view('categoria_layouts');
});
// Route::get('/dashboard', function () {
//     return view('admin.dashboard-new');
// });
Route::get('/admin-post', function () {
    return view('admin.posts');
});
Route::get('/create-post', function () {
    return view('admin.create-post');
});
Route::get('/create-user', function () {
    return view('admin.create-user');
});
Route::get('/preguntas', function () {
    return view('preguntas');
});
Route::get('/quienessomos', function () {
    return view('quienessomos');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard-new');
})->name('dashboard');

// Ruta para limpiar cache del proyecto en el hosting
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});