<?php

use App\Http\Controllers\Admin\CustomAdminController;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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



Route::get('/', [CustomAdminController::class, 'index'])->name('home');


Route::middleware('api')->post('/api/request', [ApiController::class, 'handleRequest']);
