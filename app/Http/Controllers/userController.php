<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Userlogin;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('userlogin.userlogin'); // Adjust the path if needed
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('shopdetail.show')->with('success', 'Logged in successfully.');
        } else {
            return redirect()->back()->with('error', 'The provided credentials do not match our records.');
        }
    }
}
