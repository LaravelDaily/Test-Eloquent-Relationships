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
        // TASK: fix this by adding some extra code
        return $this->belongsToMany(User::class)
            ->withPivotValue('position');
    }

}
