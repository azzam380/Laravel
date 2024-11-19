<?php

use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'index'])->name('ereporthub.index');


Route::get('/register', [UserController::class, 'formRegister'])->name('ereporthub.formRegister');
