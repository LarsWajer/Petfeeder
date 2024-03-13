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
    //
}
