<?php

use App\Http\Controllers\web\LinkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/r/{link}', [LinkController::class, 'redirect']);


