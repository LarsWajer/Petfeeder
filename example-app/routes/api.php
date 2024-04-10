<?php

use App\Models\Tijd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/tijd-voor-eten', function () {
    // Haal de waarde van tijd1 op uit de database
    $tijd = Tijd::first();
    $tijd1 = $tijd->tijd1;

    // Retourneer de waarde van tijd1, bijvoorbeeld als JSON
    return response()->json([$tijd1]);
});

Route::get('/tijd-voor-eten2', function (){
    $tijd = Tijd::first();
    $tijd2 = $tijd->tijd2;

    return response()->json([$tijd2]);
});

Route::get('/tijd-voor-eten3', function (){
    $tijd = Tijd::first();
    $tijd3 = $tijd->tijd3;

    return response()->json([$tijd3]);
});

Route::get('/current-time', [TimeController::class, 'getCurrentTime']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
