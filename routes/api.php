<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    });
*/

Route::post('/login', [PassportController::class, 'login']);
Route::middleware('auth:api')->get('/all', [PassportController::class, 'users']);

Route::get('/articles', 'App\Http\Controllers\ApiController@index');
Route::post('/articles', 'App\Http\Controllers\ApiController@create');
Route::patch('/articles/{id}', 'App\Http\Controllers\ApiController@update');
Route::delete('/articles/{id}', 'App\Http\Controllers\ApiController@delete');