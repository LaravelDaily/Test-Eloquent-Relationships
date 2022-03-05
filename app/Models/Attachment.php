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
<<<<<<< HEAD
        return $this->morphTo();
=======
>>>>>>> fa61e15864560f8e0111ee58875e20cddd146138
    }
}
