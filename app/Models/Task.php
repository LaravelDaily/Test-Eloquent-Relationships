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
        return $this->belongsTo(User::class,'users_id','id')->withDefault(['user_id'=>'']);

    }


    public function attachable()
    {
        return $this->morphMany(Attachment::class,'attachable_type');
    }
}
