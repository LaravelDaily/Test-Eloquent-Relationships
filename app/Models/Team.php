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
        return $this->belongsToMany(User::class)->select('team_id', 'user_id', 'position', 'created_at');
    }

}
