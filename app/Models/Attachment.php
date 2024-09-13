<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = ['filename', 'attachable_id', 'attachable_type'];

    public function attachable(): MorphTo
    {
        // TASK: fill in the code to make it work
        return $this->morphTo(__FUNCTION__, 'attachable_type', 'attachable_id');
    }
}
