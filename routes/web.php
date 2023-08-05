<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*

Route:: Para utilizar a classe Route

Verbo http para a requisição:
get  - Acessando direto do navegador
post - Receber os dados de um formulário
(Se fosse uma API eu poderia utilizar todos os verbos http)

Passar a URL, o que é definitivamente a rota

Tudo que estiver dentro será executado

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    echo 'Olá, mundo!';
});