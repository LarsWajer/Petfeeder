<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Tijd;
use App\Models\Count;
use App\Models\Led;

class UserTimeController extends Controller
{
    // function submit_pressed(){
    //     $tijd = Tijd::first();
    //     $count = Count::first();
    //     $led = Led::first();
    //     return view('home')->with('tijd', $tijd)->with('count', $count)->with('led', $led);
    // }

    public function submit_pressed(Request $request){

        $tijd1 = $request->input('test');
        $tijd = Tijd::first();
        $tijd->tijd1 = $tijd1;
        $tijd->save();
        return redirect('/');
        }
        
    public function submit_pressed2(Request $request){

        $tijd2 = $request->input('test2');
        $tijd = Tijd::first();
        $tijd->tijd2 = $tijd2;
        $tijd->save();
        return redirect('/');
        }
    
    
    public function submit_pressed3(Request $request){

        $tijd3 = $request->input('test3');
        $tijd = Tijd::first();
        $tijd->tijd3 = $tijd3;
        $tijd->save();            
        return redirect('/');
        }
        //return redirect('/');
}

   

    //
