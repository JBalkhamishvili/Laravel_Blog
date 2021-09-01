<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('user/register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:3|unique:users,username',
            'password' => 'required|max:255|min:3'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Welcome '.$attributes['username'].' you have been registered successfully!');
    }
}
