<?php

use App\Http\Controllers\V1\RestoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('resto', 'App\Http\Controllers\V1\RestoController'); //routes for restaurants 
Route::post('resto/{id}', 'App\Http\Controllers\V1\RestoController@addMenu');

Route::apiResource('/menus', 'App\Http\Controllers\V1\MenusController'); //routes for menus of restaurants

Route::apiResource('/commandes', 'App\Http\Controllers\V1\CommandesController'); //routes for commandes of menus 