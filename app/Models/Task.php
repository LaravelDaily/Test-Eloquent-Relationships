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
        return $this->belongsTo(User::class, 'users_id');
    }

    public function getUserNameAttribute()
    {
       return $this->user ? $this->user->name : 'Guest';
    }

    public function attachments()
    {
        return $this->morphOne(Attachment::class, 'attachable');
    }
}
