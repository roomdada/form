<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReservationController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('categories/{id}', [CategoryController::class, 'show'])->name('category');
Route::get('reservations/{eventId}', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('reservations', [ReservationController::class, 'store'])->name('reservation.store');