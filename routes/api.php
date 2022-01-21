<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ApiUsuariosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/saveUsuarios', 'App\Http\Controllers\ApiUsuariosController@saveUsuarios');

Route::post ('/usuario-nuevo', "App\Http\Controllers\UsuarioController@newUsuario")->name('CargarUsuario');
