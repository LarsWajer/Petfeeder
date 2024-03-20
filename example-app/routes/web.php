<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LedController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\UserTimeController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[LedController::class, 'index']);
Route::get('/toggle_led', [LedController::class, 'toggle_led']);
Route::get('/get_led_state', [LedController::class, 'get_led_state']);
Route::get('/button_pressed', [CountController::class, 'button_pressed']);
Route::post('/aanroepen', [UserTimeController::class, 'submit_pressed']);
