<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LedController;

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