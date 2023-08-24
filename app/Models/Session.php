<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    //relacion 1 a muchos datasheets / sessions
    public function datasheet()
    {
        return $this->belongsTo(Datasheet::class);
    }

    //relacion 1 a muchos room / sessions
    public function room()
    {
        return $this->hasOne(Room::class);
    }

    //relacion 1 a muchos attendance / sessions
    public function attendance()
    {
        return $this->hasOne(Attendance::class);
    }
}
