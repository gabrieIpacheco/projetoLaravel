<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspecializacaoController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\IndexController;

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

route::get('/especializacao', [EspecializacaoController::class, 'index'])->name('especializacao_listagem');
route::get('/especializacao/novo', [EspecializacaoController::class, 'novo'])->name('especializacao_novo');
route::get('/especializacao/editar/{id}', [EspecializacaoController::class, 'editar'])->name('especializacao_editar');
route::post('/especializacao/salvar', [EspecializacaoController::class, 'salvar'])->name('especializacao_salvar');
route::get('/especializacao/excluir/{id}', [EspecializacaoController::class, 'excluir'])->name('especializacao_excluir');

route::get('/consulta', [ConsultaController::class, 'index'])->name('consulta_listagem');
route::get('/consulta/novo', [ConsultaController::class, 'novo'])->name('consulta_novo');
route::get('/consulta/editar/{id}', [ConsultaController::class, 'editar'])->name('consulta_editar');
route::post('/consulta/salvar', [ConsultaController::class, 'salvar'])->name('consulta_salvar');
route::get('/consulta/excluir/{id}', [ConsultaController::class, 'excluir'])->name('consulta_excluir');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
