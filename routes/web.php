<?php

use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;

Route::prefix('patients')->group(function () {
    Route::post('/', [PatientsController::class, 'create'])->name('patients.create');
});

