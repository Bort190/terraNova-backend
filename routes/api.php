<?php

use App\Http\Controllers\HorseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\json;

Route::get('/', function (Request $request) {
    return 'something';
});


Route::get('/horses', [HorseController::class, 'index']);
Route::get('/horses/{horse}', [HorseController::class, 'show']);
