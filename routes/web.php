<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\PageController;

Route::get('/', [FormController::class, 'show'])->name('show-form');

// PAGE
Route::get('/thanks-page', [PageController::class, 'show'])->name('show-success-page');
Route::get('/order/{order}', [\App\Http\Controllers\OrderController::class, 'show'])->name('order.detail');

// PESERTA DML
Route::post('/peserta-store', [ParticipantController::class, 'store'])->name('store-participant');
Route::put('/peserta-update', [ParticipantController::class, 'update'])->name('update-participant');
