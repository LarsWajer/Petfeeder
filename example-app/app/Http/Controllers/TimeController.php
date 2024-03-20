<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; // Om de tijd te manipuleren

class TimeController extends Controller
{
    public function getCurrentTime()
    {
        return response()->json([
            'current_time' => Carbon::now()->toTimeString() // Stuur de huidige tijd terug als een JSON-response
        ]);
    }
    //
}
