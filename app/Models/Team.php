<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model {
    use HasFactory;

    protected $fillable = ['name', 'size', 'country_id'];

    public function users() {
        // TASK: fix this by adding some extra code
        return $this->belongsToMany(User::class, 'team_user')->withPivot('position', 'created_at');
    }
}
