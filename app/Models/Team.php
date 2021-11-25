<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'size'];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('position', 'created_at', 'updated_at');
    }

}
