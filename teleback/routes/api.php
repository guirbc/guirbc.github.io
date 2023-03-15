<?php

use Illuminate\Http\Request;

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

Route::post('/login', 'UsuarioController@login')->name('login');
Route::get('/p/{participante}','UsuarioController@linkCompartilhado')->name('loginCompartilhado');
Route::post('/navegadores','NavegadoresController@criar');
Route::middleware('auth:api')->get('/formas', 'FormaController@index');
Route::middleware('auth:api')->post('/pacientes', 'PacientesController@index');
Route::middleware('auth:api')->get('/params', 'ParametroController@index');
Route::middleware('auth:api')->get('/sms', 'SmsController@index');
Route::middleware('auth:api')->get('/users', 'UsuarioController@index');
Route::middleware('auth:api')->get('/verify', 'UsuarioController@verificacao');
Route::middleware('auth:api')->get('/participantes/{grupo}', 'AgendamentoGrupoController@participantes');

Route::middleware('auth:api')->post('/salas', 'SalaController@criar');
Route::middleware('auth:api')->get('/salas/encerrar/{sala}', 'SalaController@encerrar');
Route::middleware('auth:api')->post('/files', 'ArquivosController@criar');
//Route::middleware('auth:api')->post('/files/download', 'ArquivosController@download');
Route::post('/files/download', 'ArquivosController@download');
Route::middleware('auth:api')->post('/salas/participante', 'ArquivosController@participante');
Route::middleware('auth:api')->post('/agendamentogrupo', 'AgendamentoGrupoController@index');

Route::middleware('auth:api')->post('/salas/acessou/{id}', 'SalaController@acessou');
Route::middleware('auth:api')->get('/salas/profissional/{id}', 'SalaController@salas');

Route::middleware('auth:api')->get('/profissionais/{forma}', 'ProfissionalController@index');
Route::middleware('auth:api')->get('/agendas/{forma}', 'AgendaController@index');
