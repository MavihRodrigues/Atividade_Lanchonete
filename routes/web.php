<?php

use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente/create', [ClienteController::class, 'create']);

Route::put('/cliente/update', [ClienteController::class, 'update']);

Route::put('/cliente/delete', [ClienteController::class, 'delete']);