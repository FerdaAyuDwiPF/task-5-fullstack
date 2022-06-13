<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});

Route::get('/add', function() {
    return view('add');
});

Route::get('/create', function() {
    return view('create');
});

Auth::routes();

Route::get('/home', [App\Http\ControllersArticlesController::class, 'show'])->name('show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\ArticlesController::class, 'show'])->name('show');
Route::post('/add_process', [App\Http\Controllers\ArticlesController::class, 'add_process']);
Route::post('/create_process', [App\Http\Controllers\ArticlesController::class, 'create_process']);
Route::get('/show', [App\Http\Controllers\ArticlesController::class, 'show']);
Route::get('/detail/{id}', [App\Http\Controllers\ArticlesController::class, 'detail']);
Route::get('/edit/{id}', [App\Http\Controllers\ArticlesController::class, 'edit']);
Route::post('/edit_process', [App\Http\Controllers\ArticlesController::class, 'edit_process']);
Route::get('/delete/{id}', [App\Http\Controllers\ArticlesController::class, 'delete']);