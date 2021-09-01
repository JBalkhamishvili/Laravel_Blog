<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function create()
    {
        return view('user.login');
    }

    public function login()
    {
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes))
        {
            return redirect('/')->with('success', 'Welcome back '.$attributes['username'].'!');
        }

        session()->regenerate();

        throw ValidationException::withMessages([
            'username' => 'username or password is not correct!'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('logout', 'Goodbye!');
    }
}
