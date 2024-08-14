<?php

use App\Http\Controllers\OsisController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [OsisController::class,'read']);

Route::get('/input', [OsisController::class,'input']);

// nampilin create
Route::post('/store', [OsisController::class,'store']);

// buat nampilin edit
Route::get('/edit/{id}', [OsisController::class,'edit']);
Route::put('/update/{id}', [OsisController::class,'update']);

Route::delete('/update/{id}', [OsisController::class,'destroy']);
