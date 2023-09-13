<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'users_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id')->withDefault(); //withDefault() is used to avoid errors when there is no user
    }
}
