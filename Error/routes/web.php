<?php

use App\Http\Controllers\ErrorController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', ErrorController ::class);