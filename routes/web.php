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

// quando uso  rota resource não posso indicar nenhum método na controller.
// os metodos serão definido pelas rotas ou os verbos http
// por padrão a rota abaixo irá direto ao método index da controller
Route::resource('books', 'BookController');
