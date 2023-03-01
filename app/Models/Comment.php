<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['task_id', 'name', 'comment'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    /**
     * Get the comment's attachment.
     */
    public function attachment()
    {
        return $this->morphOne(Attachment::class, 'attachable');
    }
}