<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente/dashboard', [ClienteController::class, 'index'])->name('clientes.dashboard');

//CLIENTE

Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');

Route::put('/cliente/update', [ClienteController::class, 'update']);

Route::delete('/cliente/delete', [ClienteController::class, 'delete']);

Route::get('/cliente/read', [ClienteController::class, 'index']);


//PRODUTO

Route::get('/produto/create', [ProdutoController::class, 'create']);