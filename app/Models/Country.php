<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $appends = ['teams_avg_size'];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function getTeamsAvgSizeAttribute()
    {
        return $this->teams()->avg('size');
    }
}
