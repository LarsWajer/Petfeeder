<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; // Om de tijd te manipuleren

class TimeController extends Controller
{
    public function getCurrentTime()
    {
        $currentTime = Carbon::now();

        // Formateer de tijd om alleen uren en minuten weer te geven
        $formattedTime = $currentTime->format('H:i:00');

        

        // Stuur de geformatteerde tijd als JSON terug
        return response()->json([
            $formattedTime 
        ]);
    }
    
}
