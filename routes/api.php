<?php

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


















Route::resource('teachers', App\Http\Controllers\API\TeacherAPIController::class)
    ->except(['create', 'edit']);

Route::resource('posts', App\Http\Controllers\API\PostAPIController::class)
    ->except(['create', 'edit']);

Route::resource('roksana_-apus', App\Http\Controllers\API\Roksana_ApuAPIController::class)
    ->except(['create', 'edit']);