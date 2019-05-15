<?php

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
Route::get('/atividades/{id}/edit', 'AtividadeController@edit');
Route::put('/atividades/{id}', 'AtividadeController@update');
Route::get('/atividades', 'AtividadeController@index');
Route::get('/atividades/create', 'AtividadeController@create');
Route::post('/atividades', 'AtividadeController@store');
Route::get('/atividades/{id}', 'AtividadeController@show');
Route::delete('/atividades/{id}', 'AtividadeController@destroy');

Route::get('/mensagens/{id}/edit', 'mensagensController@edit');
Route::put('/mensagens/{id}', 'mensagensController@update');
Route::get('/mensagens', 'mensagensController@index');
Route::get('/mensagens/create', 'mensagensController@create');
Route::post('/mensagens', 'mensagensController@store');
Route::get('/mensagens/{id}', 'mensagensController@show');
Route::delete('/mensagens/{id}', 'mensagensController@destroy');






//php artisan key:generate
//composer dump-autoload
//php artisan migrate --seed