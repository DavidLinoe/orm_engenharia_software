<?php

use App\Http\Controllers\Api\DepartamentoController;
use App\Http\Controllers\Api\FuncionarioController;
use Illuminate\Support\Facades\Route;

Route::get('/api/funcionarios', [FuncionarioController::class, 'index']); 
Route::post('/api/funcionarios', [FuncionarioController::class, 'store']); 
Route::get('/api/funcionarios/{id}', [FuncionarioController::class, 'show']); 
Route::put('/api/funcionarios/{id}', [FuncionarioController::class, 'update']); 
Route::delete('/api/funcionarios/{id}', [FuncionarioController::class, 'destroy']); 

Route::get('/api/departamentos', [DepartamentoController::class, 'index']); 
Route::post('/api/departamentos', [DepartamentoController::class, 'store']); 
Route::get('/api/departamentos/{id}', [DepartamentoController::class, 'show']); 
Route::put('/api/departamentos/{id}', [DepartamentoController::class, 'update']); 
Route::delete('/api/departamentos/{id}', [DepartamentoController::class, 'destroy']); 

Route::get('/api/funcionarios/{id}/departamento', [FuncionarioController::class, 'departamento']);
Route::get('/api/departamentos/{id}/funcionarios', [DepartamentoController::class, 'funcionariosDeDepartamento']); 
Route::get('/api/departamentos/{id}/funcionario', [FuncionarioController::class, 'departamentoDeFuncionario']); 
