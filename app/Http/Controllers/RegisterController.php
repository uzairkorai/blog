<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:100',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:100|unique:users,email',
            'email_verified_at' => 'required|max:100',
            'password' => 'required|min:7|max:100',
        ]);

        $user = User::create($attributes);

        // log the user in
        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created');
    }
}
