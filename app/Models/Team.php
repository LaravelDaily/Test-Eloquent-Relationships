<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'size', 'country_id'];

    public function users(): BelongsToMany
    {
        // TASK: fix this by adding some extra code
        return $this->belongsToMany('users','team_user','team_id','user_id');
    }

}
