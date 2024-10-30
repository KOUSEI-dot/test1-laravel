<?php

use App\Http\Controllers\registerControllers;
use App\Http\Controllers\loginControllers;
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
Route::get('/', [registerControllers::class, 'register']);
Route::post('/', [loginControllers::class, 'login']);


