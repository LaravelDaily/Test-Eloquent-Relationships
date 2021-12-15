<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function getTeamsAvgSizeAttribute()
    {
        return $this->teams()->selectRaw('avg(size) as avg')->first()->avg;
    }
}
