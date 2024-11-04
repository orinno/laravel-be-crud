<?php

use App\Http\Controllers\UnitController;
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

// Route::get('/unit', [UnitController::class, 'index']);
Route::get('/units', 'App\Http\Controllers\UnitController@index');
Route::post('/units', 'App\Http\Controllers\UnitController@store');
Route::get('/units/{id}', 'App\Http\Controllers\UnitController@show');
Route::put('/units/{id}', 'App\Http\Controllers\UnitController@update');
Route::delete('/units/{id}', 'App\Http\Controllers\UnitController@destroy');
