<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'users_id'];

    public function user()
    {
<<<<<<< HEAD
        return $this->belongsTo(User::class, 'users_id')->withDefault([
            'name'=>'neo',
        ]);
=======
        return $this->belongsTo(User::class, 'users_id');
>>>>>>> fa61e15864560f8e0111ee58875e20cddd146138
    }
}
