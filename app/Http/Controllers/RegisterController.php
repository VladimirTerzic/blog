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

    public function store(Request $request)
    {
        // return $request->all();
         $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email', 'min:4', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:4', 'unique:users']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', $user->name . ' logged in');
    }
}
