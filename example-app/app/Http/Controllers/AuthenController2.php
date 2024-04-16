<?php

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthenController2 extends Controller
{
    public function update(Request $request): RedirectResponse
    {
        $user = $request->user();
 
        // ...
 
        return redirect('/index-2');
    }
}