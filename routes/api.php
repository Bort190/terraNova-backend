<?php

use App\Http\Controllers\HorseController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\json;

Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/', function (Request $request) {
    return 'something';
});


Route::get('/horses', [HorseController::class, 'index']);
Route::get('/horses/{horse}', [HorseController::class, 'show']);
