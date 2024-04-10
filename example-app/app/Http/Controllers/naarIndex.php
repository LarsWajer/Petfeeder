<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_login;


class naarIndex extends Controller
{
    public function index()
    {
        $user = User_login::first();
        return view('index')->with('user', $user);
    }
}
