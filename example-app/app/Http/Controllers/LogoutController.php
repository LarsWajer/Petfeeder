<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout(); // Uitloggen van de huidige gebruiker

        return redirect('/login'); // Redirect naar de inlogpagina (of een andere gewenste bestemming)
    }
}
