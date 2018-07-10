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
use Illuminate\Support\Facades\Request;
use App\Usuario;


Route::get('/', function(){
	return view('layout.principal');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/login', 'UsuariosController@login')->name('login');
Route::get('/areaPaciente', 'UsuariosController@areaPaciente')->name('areaPaciente');
Route::get('/cadastraPaciente', 'UsuariosController@cadastraPaciente')->name('cadastraPaciente');
Route::get('/cadastraAdm', 'UsuariosController@cadastraAdm')->name('cadastraAdm');
Route::get('/listaUsuarios', 'UsuariosController@listaUsuarios')->name('listaUsuarios');

Route::get('/areaAdministrador', 'UsuariosController@areaAdministrador')->name('areaAdministrador');

Route::get('/areaOperador', 'UsuariosController@areaOperador')->name('areaOperador');

Route::get('/cadastraExame', 'UsuariosController@cadastraExame')->name('cadastraExame');
Route::get('/listaExames', 'ExamesController@listaExames')->name('listaExames');
Route::post('/listaEspecifico', 'ExamesController@listaEspecifico')->name('listaEspecifico');

Route::get('/listaProcedimentos', 'ProcedimentosController@listaProcedimentos')->name('listaProcedimentos');
Route::get('/listaEdita', 'ProcedimentosController@listaEdita')->name('listaEdita');
Route::get('/listaExclui', 'ProcedimentosController@listaExclui')->name('listaExclui');
Route::post('/editaPreco', 'ProcedimentosController@editaPreco')->name('editaPreco');
Route::post('/atualizaPreco', 'ProcedimentosController@atualizaPreco')->name('atualizaPreco');

Route::resource('/exames', 'ExamesController');
Route::resource('/procedimentos', 'ProcedimentosController');
Route::resource('/usuarios', 'UsuariosController');