<?php

use App\Http\Controllers\AirplaneController;
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
Route::post('airplane/store',[AirplaneController::class,'store']);
Route::get('airplane/{airplane}/show',[AirplaneController::class,'show']);
Route::put('airplane/{airplane}/update',[AirplaneController::class,'update']);
Route::delete('airplane/{airplane}/delete',[AirplaneController::class,'delete']);
//pilot
Route::post('pilot/store',[\App\Http\Controllers\PilotController::class,'store']);
Route::get('pilot/{pphp artisan install:apiilot}/show',[\App\Http\Controllers\PilotController::class,'show']);
Route::put('pilot/{pilot}/update',[\App\Http\Controllers\PilotController::class,'update']);
Route::delete('pilot/{pilot}/delete',[\App\Http\Controllers\PilotController::class,'delete']);

Route::post('pilot/{pilot}/token',[\App\Http\Controllers\PilotController::class,'token']);
