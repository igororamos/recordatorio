<?php

use App\Http\Controllers\AlimentController;
use App\Http\Controllers\PsiController;
use App\Http\Controllers\CefaleiaController;
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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/alimentacao', [EventController::class, 'alimentacao']);

Route::get('/psi', [EventController::class, 'psi']);

Route::get('/cefaleia', [EventController::class, 'cefaleia']);

//Rotas de POST dos formulários;
Route::post("/alimentacao", [AlimentController::class,'store']);
Route::post("/psi", [PsiController::class,'store']);
Route::post("/cefaleia", [CefaleiaController::class,'store']);