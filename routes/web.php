<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProcessoController;

Route::get('/', [ProcessoController::class, 'index']);


Route::get('/processos', [ProcessoController::class, 'index']);