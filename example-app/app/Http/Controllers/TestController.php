<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TestController extends Controller
{
    
    public function login(Request $request)
    {
        // Valideer de inkomende data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Haal de inloggegevens op uit het verzoek
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        // Probeer de gebruiker te authenticeren met 'username'
        if (Auth::attempt($credentials)) {
            // Authenticated
            return redirect('/index');
        }

        // Authentication failed
        return back()->withInput()->withErrors(['credentials' => 'Invalid username or password']);
    }
}    