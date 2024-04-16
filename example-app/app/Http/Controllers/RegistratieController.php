<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegistratieController extends Controller
{
    public function register(Request $request)
    {
        // Valideer de inkomende gegevens
        $request->validate([
            'username' => 'required|unique:User',
            'password' => 'required',
        ]);

        // Maak een nieuwe gebruiker aan
        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password); // Hash het wachtwoord met bcrypt
        $user->save();

        // Redirect naar een succesvolle registratiepagina of een andere gewenste bestemming
        return redirect('/login');
    }
}
