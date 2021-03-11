<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->
    get('/usuario','UsuarioApiController@usuario');

Route::middleware('auth:api')->
    post('/suma','UsuarioApiController@suma');

Route::apiResource('casas','CasasApiController');


