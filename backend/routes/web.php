<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaceController;


Route::get('/', [RaceController::class, 'getNextRace']); // Asignamos la ruta a nuestro controlador



Route::get('/api/fetch-races', RaceController::class . '@fetchAndStoreRaces');