<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'size', 'country_id'];

    public function users()
    {
        // TASK: fix this by adding some extra code
<<<<<<< HEAD
        return $this->belongsToMany(User::class)->withPivot('position','created_at');
=======
        return $this->belongsToMany(User::class);
>>>>>>> fa61e15864560f8e0111ee58875e20cddd146138
    }

}
