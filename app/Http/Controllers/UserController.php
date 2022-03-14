<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //To get at least one model that has the related project model
        $users = User::has('projects')->get();
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
