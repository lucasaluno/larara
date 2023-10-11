<?php

use App\Http\Controllers\AnimaisController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/animais',AnimaisController::class);
