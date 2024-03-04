<?php

use App\Http\Controllers\GamesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JournalsController;
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


Route::get('/', [HomeController::class,'index']);

Route::get('games', [GamesController::class,'index']);
Route::get('journals', [JournalsController::class,'index']);


Route::post('games/add', [GamesController::class,'add']);
Route::post('journals/add', [JournalsController::class,'add']);

Route::post('games/delete', [GamesController::class,'delete']);
Route::post('journals/delete', [JournalsController::class,'delete']);

Route::post('games/edit', [GamesController::class, 'edit']);
Route::post('journals/edit', [JournalsController::class, 'edit']);
