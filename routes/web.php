<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspecializacaoController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\BoletimController;

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

Route::get('/', [IndexController::class, 'index'])->name('inicio');
// rotas da especializacao
route::get('/especializacao', [EspecializacaoController::class, 'index'])->name('especializacao_listagem');
route::get('/especializacao/novo', [EspecializacaoController::class, 'novo'])->name('especializacao_novo');
route::get('/especializacao/editar/{id}', [EspecializacaoController::class, 'editar'])->name('especializacao_editar');
route::post('/especializacao/salvar', [EspecializacaoController::class, 'salvar'])->name('especializacao_salvar');
route::get('/especializacao/excluir/{id}', [EspecializacaoController::class, 'excluir'])->name('especializacao_excluir');

// rotas da consulta
route::get('/consulta', [ConsultaController::class, 'index'])->name('consulta_listagem');
route::get('/consulta/novo', [ConsultaController::class, 'novo'])->name('consulta_novo');
route::get('/consulta/editar/{id}', [ConsultaController::class, 'editar'])->name('consulta_editar');
route::post('/consulta/salvar', [ConsultaController::class, 'salvar'])->name('consulta_salvar');
route::get('/consulta/excluir/{id}', [ConsultaController::class, 'excluir'])->name('consulta_excluir');

// rotas da avaliacao
route::get('/avaliacao', [AvaliacaoController::class, 'index'])->name('avaliacao_listagem');
route::get('/avaliacao/novo', [AvaliacaoController::class, 'novo'])->name('avaliacao_novo');
route::get('/avaliacao/editar/{id}', [AvaliacaoController::class, 'editar'])->name('avaliacao_editar');
route::post('/avaliacao/salvar', [AvaliacaoController::class, 'salvar'])->name('avaliacao_salvar');
route::get('/avaliacao/excluir/{id}', [AvaliacaoController::class, 'excluir'])->name('avaliacao_excluir');

// rotas do paciente
route::get('/paciente', [PacienteController::class, 'index'])->name('paciente_listagem');
route::get('/paciente/novo', [PacienteController::class, 'novo'])->name('paciente_novo');
route::get('/paciente/editar/{id}', [PacienteController::class, 'editar'])->name('paciente_editar');
route::post('/paciente/salvar', [PacienteController::class, 'salvar'])->name('paciente_salvar');
route::get('/paciente/excluir/{id}', [PacienteController::class, 'excluir'])->name('paciente_excluir');

//rotas do boletim
route::get('/boletim', [BoletimController::class, 'index'])->name('boletim_listagem');
route::get('/boletim/novo', [BoletimController::class, 'novo'])->name('boletim_novo');
route::get('/boletim/editar/{id}', [BoletimController::class, 'editar'])->name('boletim_editar');
route::post('/boletim/salvar', [BoletimController::class, 'salvar'])->name('boletim_salvar');
route::get('/boletim/excluir/{id}', [BoletimController::class, 'excluir'])->name('boletim_excluir');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
