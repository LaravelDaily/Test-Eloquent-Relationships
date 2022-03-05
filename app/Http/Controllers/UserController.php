<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereHas('projects')->get();

        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        $user = User::with('comments')->get();
        
        return view('users.show', compact('user'));
    }
}
