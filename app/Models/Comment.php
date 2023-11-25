<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['task_id', 'name', 'comment'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function attachment(): MorphOne
    {
        return $this->morphOne(Attachment::class, 'attachable');
    }
}
