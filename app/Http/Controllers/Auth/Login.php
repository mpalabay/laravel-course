<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class Login extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate the input
        $credentials = $request->validate([
            'email' => 'required|email|',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('success', 'Welcome back to Pawi!');
        }

        return back()
        ->withErrors(['email' => 'The provided email do not match on our records.'])
        ->onlyInput('email');
    }
}
