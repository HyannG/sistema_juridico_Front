<?php

namespace App\Http\Controllers;

abstract class Controller
{
    use App\Http\Controllers\ProcessoController;

    Route::get('/processos', [ProcessoController::class, 'index']);
}
