<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::post('/asd', [UserController::class, 'index'])->name('user.sendFile');
