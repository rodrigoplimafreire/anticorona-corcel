<?php

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

Route::get('/perguntas', 'Api\PostController@perguntas');
Route::get('/treinamentos', 'Api\PostController@treinamentos');
Route::get('/artigos', 'Api\PostController@artigos');
Route::get('/boletins', 'Api\PostController@boletins');
Route::get('/guias', 'Api\PostController@guias');
