<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_login;


class naarLogin extends Controller
{
    public function index()
    {
        
        return view('inlog')->with('user', $user);
    }
}

