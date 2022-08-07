<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RestController;

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

Route::get('/register',[AuthController::class, 'register']);
Route::post('/register',[AuthController::class, 'postRegister']);
Route::get('/login',[AuthController::class, 'login']);
Route::post('/login',[AuthController::class, 'postLogin']);
Route::get('/logout',[AuthController::class, 'logout']);

Route::get('/',[AttendanceController::class, 'index']);
Route::post('/attendance/start',[AttendanceController::class, 'start']);
Route::post('/attendance/end',[AttendanceController::class, 'end']);
Route::get('/attendance',[AttendanceController::class, 'getAttendance']);

Route::post('/rest/start',[RestController::class, 'start']);
Route::post('/rest/end',[RestController::class, 'end']);