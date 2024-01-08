<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccountController extends Controller
{
    public function create() {
        return inertia(
            'UserAccount/Create'
        );
    }

    public function store(Request $request) {
        $user = User::create($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]));
        // replaced by Mutators and Accessors in User.php
        // $user->password = Hash::make($user->password);       
        // $user->save();
        
        Auth::login($user);

        return redirect()->route('workouts.index')->with('success', 'Account created!');
    }
}