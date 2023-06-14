<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\CategoriaController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/materiales', [MaterialController::class, 'index']);
Route::post('/material', [MaterialController::class, 'store']);
Route::get('/material/{id}', [MaterialController::class, 'show']);
Route::put('/material/{id}', [MaterialController::class, 'update']);
Route::delete('/material/{id}', [MaterialController::class, 'destroy']);

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::post('/categoria', [CategoriaController::class, 'store']);
Route::get('/categoria/{id}', [CategoriaController::class, 'show']);
Route::put('/categoria/{id}', [CategoriaController::class, 'update']);
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

