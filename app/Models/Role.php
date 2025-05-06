<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        // TASK: fix this by adding a parameter
        return $this->belongsToMany(User::class, 'users_roles');
    }

    public function user() {
        return $this->belongsTo(User::class, 'users_id');
    }
}
