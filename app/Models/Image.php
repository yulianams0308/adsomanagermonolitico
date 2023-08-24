<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //relacion 1 a 1 polimorfica imageable / users
    public function imageable()
    {
       return $this->morphTo();
    }


}
