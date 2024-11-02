<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test3Controller;
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

Route::get('/weight_logs',[Test3Controller::class, 'index']);
Route::get('/weight_logs/create',[Test3Controller::class, 'store']);
Route::post('/weight_logs/create',[Test3Controller::class, 'create']);

