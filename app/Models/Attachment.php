<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = ['filename', 'attachable_id', 'attachable_type'];

    public function attachable()
    {
        // TASK: fill in the code to make it work
        return $this->morphTo();
    }
}
