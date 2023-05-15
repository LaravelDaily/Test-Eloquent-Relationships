<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
