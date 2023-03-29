<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;
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

Route::get('signup', [AuthController::class, 'register_form']);
Route::post('signup', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('/',[SiswaController::class,'index']);
Route::get('add',[SiswaController::class,'create']);
Route::post('/add',[SiswaController::class,'store']);
Route::get('/edit/{id}', [SiswaController::class, 'edit']);
Route::patch('/edit/{id}', [SiswaController::class, 'update']);
Route::delete('/edit/{id}', [SiswaController::class, 'destroy']);