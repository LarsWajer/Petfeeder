<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LedController extends Controller
{
    function index(){
        $count = Count::first();
        return view('home');
    }
    //
}
