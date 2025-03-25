<?php

use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});