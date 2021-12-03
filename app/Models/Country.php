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

    public function averageTeamSize() {
        return $this->teams()
            ->selectRaw('avg(size) as aggregate, country_id')
            ->groupBy('country_id');
    }
}
