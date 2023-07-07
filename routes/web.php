<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// FORM
Route::get('/', [FormController::class, 'show'])->name('show-form');

// PAGE
Route::get('/thanks-page', [PageController::class, 'show'])->name('show-success-page');

// PESERTA DML
Route::post('/peserta-store', [ParticipantController::class, 'store'])->name('store-participant');
Route::put('/peserta-update', [ParticipantController::class, 'update'])->name('update-participant');
