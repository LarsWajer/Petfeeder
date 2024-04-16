<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NaarInlogController extends Controller
{
    public function index()
    {
        return view('/index'); // Stuur de gebruiker door naar de loginpagina
    }
}
