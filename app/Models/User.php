<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function tasks(): hasMany
    {
        // TASK: fix this by adding a parameter
        return $this->hasMany(Task::class,'users_id','id');
    }

    public function comments(): belongsToMany
    {
        // TASK: add the code here for two-level relationship
        return $this->belongsToMany(Comment::class,'tasks','user_id','id','task_id','comnmet_id');
    }

    public function projects(): belongsToMany
    {
        return $this->belongsToMany(Project::class)->withPivot('start_date');
    }
}
