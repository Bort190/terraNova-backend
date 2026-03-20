<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HorseController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\json;

Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/user', [LoginController::class, 'user'])->middleware('auth:sanctum');
Route::get('/employees', [EmployeeController::class, 'index'])->middleware('auth:sanctum');


Route::get('/horses', [HorseController::class, 'index']);
Route::get('/horses/{horse}', [HorseController::class, 'show']);
