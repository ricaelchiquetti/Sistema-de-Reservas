<?php

use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/reserva', [App\Http\Controllers\HomeController::class, 'index'])->name('reservas');
    Route::resource('reservas', ReservaController::class);
});

Auth::routes();
