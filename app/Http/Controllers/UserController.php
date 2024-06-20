<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //$users = User::all();

        $users = User::has('projects')->get();

        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        $user = User::with('comments')->findOrFail($user->id);
        return view('users.show', compact('user'));
    }
}
