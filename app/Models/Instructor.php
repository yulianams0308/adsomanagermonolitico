<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    //relacion 1 a muchos datasheets / instructors
    public function datasheets()
    {
        return $this->belongsToMany(Datasheet::class);
    }
}
