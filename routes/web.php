<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::post('/', function () {
    return view('welcome');
});
Route::post ( '/usuario' , "App\Http\Controllers\UsuarioController@showList");
//Route::get ('usuario-list', UsuarioController::class . '@showList');
/*Route::get('/usuario-list', function () {
    return view('usuario-list','UsuarioController@showList');
});
*/
//Esto es lo que tiene el profe en el ejemplo de la clase de apoyo
//Route::get ('/article-new', "app\http\controllers\articlecontroller@articlenew");
route::get('/usuario-list', "App\Models\Usuario\UsuarioController@showList");
Route::post ('/usuario-nuevo', "App\http\controllers\UsuarioControllerr@newUsuario")->name('CargarUsuario');


Route::post('/usuario-form', "App\Http\Controllers\UsuarioController@Form");
