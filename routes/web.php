<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/user/{id}/update', [UserController::class, 'edit']);
Route::post('/user/{id}', [UserController::class, 'update']);

Route::get('/user/{id}/delete', [UserController::class, 'destroy']);