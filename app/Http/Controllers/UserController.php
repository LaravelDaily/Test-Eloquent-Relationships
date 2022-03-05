<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $users = User::whereHas('projects')->get();
=======
        $users = User::all();

>>>>>>> fa61e15864560f8e0111ee58875e20cddd146138
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
