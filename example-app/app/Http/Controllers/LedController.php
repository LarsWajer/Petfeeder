<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Count;
use App\Models\Led;
use App\Models\Tijd;

class LedController extends Controller

{
    function index(){
        $tijd = Tijd::first();
        $count = Count::first();
        $led = Led::first();
        return view('home')->with('tijd', $tijd)->with('count', $count)->with('led', $led);
    }


    function toggle_led(){
        $led = led::first();

        if ($led->led_is_on == 1) {
            $led->led_is_on = 0;
            
        } else {
            $led->led_is_on = 1;
            
        }

        $led->save();

        //return redirect('/');
    }

    function get_led_state(){
        
        return Led::first()->led_is_on;
    }
    //
}
