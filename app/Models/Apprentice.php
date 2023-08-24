<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    //relacion 1 a muchos datasheet / apprentices
    public function datasheet()
    {
        return $this->belongsTo(Datasheet::class);
    }
}

