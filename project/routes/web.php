<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get(
    '/sample',
    [\App\Http\Controllers\Sample\IndexController::class,
    'show']
);

Route::get(
    '/sample/{id}',
    [\App\Http\Controllers\Sample\IndexController::class,
    'showId']
);

Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class);



Route::get('/', function () {
    return view('sample');
});

