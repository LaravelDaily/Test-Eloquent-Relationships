<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    public function scopeTeamsAveSize(Builder $builder): Builder
    {
//        dd(Team::query()
//            ->whereColumn('teams.country_id', 'countries.id')
//            ->avg('size'));
        return $builder->addSelect(['teams_avg_size' => Team::query()->selectRaw('AVG(`size`) as teams_avg_size')
            ->whereColumn('teams.country_id', 'countries.id')
        ]);
    }
}
