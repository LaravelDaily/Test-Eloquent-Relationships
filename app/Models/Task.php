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
        // if in elqouent relation one to many forien_id is null we can return defalut model 
        return $this->belongsTo(User::class, 'users_id')->withDefault();
    }
}
