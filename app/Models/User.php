<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tasks()
    {
        // TASK: fix this by adding a parameter
<<<<<<< HEAD
        return $this->hasMany(Task::class,'users_id');
=======
        return $this->hasMany(Task::class);
>>>>>>> fa61e15864560f8e0111ee58875e20cddd146138
    }

    public function comments()
    {
        // TASK: add the code here for two-level relationship
<<<<<<< HEAD
        return $this->hasOneThrough(Comment::class,Task::class, 'users_id','task_id');
=======
>>>>>>> fa61e15864560f8e0111ee58875e20cddd146138
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('start_date');
    }
}
