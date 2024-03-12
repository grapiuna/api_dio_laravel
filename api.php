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
Route::get('bands', 'App\Http\Controllers\BandController@getAll');
Route::post('bands/store', 'App\Http\Controllers\BandController@store');
Route::get('bands/{id}', 'App\Http\Controllers\BandController@getById');
Route::get('bands/gender/{gender}', 'App\Http\Controllers\BandController@getByGender');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
