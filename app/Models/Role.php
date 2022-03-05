<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        // TASK: fix this by adding a parameter
<<<<<<< HEAD
        return $this->belongsToMany(User::class, 'users_roles','user_id','role_id');
=======
        return $this->belongsToMany(User::class);
>>>>>>> fa61e15864560f8e0111ee58875e20cddd146138
    }
}
