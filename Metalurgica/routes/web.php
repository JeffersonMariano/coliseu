<?php

use Illuminate\Support\Facades\Route;
use App\Treinamento;
use App\Funcionario;
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

Route::resource('funcionario','FuncionarioController');

Route::resource('treinamento','TreinamentoController');

Route::resource('fornecedor','FornecedorController');

Route::resource('experienciaprofissional','ExperienciaprofissionalController');

Route::resource('turma','TurmaController');

Route::get('/turma/create/{id}', function ($id) {
	$funcionarios = Funcionario::paginate(5);
	$treinamento = Treinamento::find($id);
    return View('turma/create')->with('treinamento',$treinamento)->with('funcionarios',$funcionarios);
});