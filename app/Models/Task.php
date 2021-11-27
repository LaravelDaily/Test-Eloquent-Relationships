<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'users_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
