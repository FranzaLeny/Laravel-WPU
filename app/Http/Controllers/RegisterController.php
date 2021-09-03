<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view(
            'front.auth.register',
            [
                'title' => 'Login'
            ]
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:6', 'max:20', 'unique:users'],
            'email' => ['required', 'min:6', 'email:dns', 'max:20', 'unique:users'],
            'password' => ['required', 'min:6',  'max:255',],
            'password-confirm' => ['required',  'max:255', 'same:password'],
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect('/login')->with('success', 'Registration successfull please login');
    }
}
