<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Count;
use App\Models\Led;

class LedController extends Controller
{
    function index(){
        $count = Count::first();
        return view('home')->with('count', $count);
    }


    function toggle_led(){
        $led = led::first();

        if ($led->led_is_on == 1) {
            $led->led_is_on = 0;
            # code...
        } else {
            $led->led_is_on = 1;
            # code...
        }
        
    }
    //
}
