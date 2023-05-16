<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;

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
    return view('welcome');
});

Route::get('test/', function () {
    
    /*
    $categoria = Categoria::create([
        'nombre' => 'Consolas',
        'descripcion' => 'Consolas de videojuegos como Nintendo, Playstation, Xbox o consolas retro'
    ]);

    return "Se insertó una categoría con el id: {$categoria->id}";
    */

});

route::get('categorias', [
    CategoriaController::class, 'index'
])->name('categorias.index');

route::get('categorias/{categoria}', [
    CategoriaController::class, 'show'
])->name('categorias.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
