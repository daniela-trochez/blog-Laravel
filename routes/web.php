<?php

use App\Http\Controllers\UserCotroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserCotroller::class);
