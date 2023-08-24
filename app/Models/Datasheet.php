<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasheet extends Model
{
    use HasFactory;
     //relacion 1 a muchos datasheets / competences
     public function competences()
     {
         return $this->belongsToMany(Competence::class);
     }

      //relacion 1 a muchos datasheets / instructors
      public function instructors()
      {
          return $this->belongsToMany(Instructor::class);
      }

      //relacion 1 a muchos datasheets / sessions
      public function sessions()
      {
          return $this->belongsToMany(Session::class);
      }

      //relacion 1 a muchos datasheets / apprentices
      public function apprentices()
      {
          return $this->belongsToMany(Apprentice::class);
      }
}
