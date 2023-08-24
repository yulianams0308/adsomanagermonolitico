<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

     //relacion 1 a muchos room / sessions
     public function session()
     {
         return $this->belongsTo(Session::class);
     }
}
