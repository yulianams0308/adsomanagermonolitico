<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    //relacion 1 a muchos result / competences
    public function competences()
    {
        return $this->belongsToMany(Competence::class);
    }
}
