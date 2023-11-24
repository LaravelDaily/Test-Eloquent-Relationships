<?php

namespace App\Http\Controllers;

use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::with('users')->get();

        return view('roles.index', compact('roles'));
    }
}
