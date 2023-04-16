<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'users_id']; // users_id foreign key for users table. Normally, user_id preferred but with adding some extra codes you can use users_id
    // Extra codes are like  "return $this->hasMany(Task::class,'users_id');" this. If it is user_id return $this->hasMany(Task::class);
    // that would be enough.

    public function user()
    {
        // Task user relationship
        return $this->belongsTo(User::class, 'users_id');
    }
}
