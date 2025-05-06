<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'size', 'country_id'];

    public function users()
    {
        // TASK: fix this by adding some extra code
        return $this->belongsToMany(User::class, 'team_user')->withPivot('position', 'created_at');
    }

}
