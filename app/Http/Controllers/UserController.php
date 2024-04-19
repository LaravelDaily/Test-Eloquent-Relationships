<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;

class UserController extends Controller
{
    public function index()
    {
        $users = User::withCount('projects')->get();

        $users = $users->reject(function ($user) {
            return $user->projects_count === 0;
        });

        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
