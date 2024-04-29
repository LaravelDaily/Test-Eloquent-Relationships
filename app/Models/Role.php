<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        // TASK: fix this by adding a parameter
        return $this->belongsToMany(User::class, 'users_roles', 'role_id', 'user_id');
    }
}
