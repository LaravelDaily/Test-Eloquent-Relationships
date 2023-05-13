<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'users_id'];

    protected $attributes = ['users_id' => null];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
