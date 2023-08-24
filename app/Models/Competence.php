<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;


    //relacion 1 a muchos result / competences
    public function result()
    {
        return $this->belongsTo(Result::class);
    }

    //relacion 1 a muchos datasheets / competences
    public function datasheets()
    {
        return $this->belongsToMany(Datasheet::class);
    }
}
