<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get Users Api
Route::get('users', [UserController::class, 'index']);

// Show Users Api
Route::get('users/{id}', [UserController::class, 'show']);

// Insert Users Api
Route::post('users', [UserController::class, 'store']);

// Update Users Api
Route::put('users/{id}', [UserController::class, 'update']);

// Delete Users Api
Route::delete('users/{id}', [UserController::class, 'destroy']);