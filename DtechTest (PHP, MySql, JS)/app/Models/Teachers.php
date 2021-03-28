<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    // use HasFactory;
    public function Subjects()
    {
        return $this->hasOne('App\Subjects');
    }

    public function Students(){
        return $this->belongTo('App\Students', 'teacher_id');
    }
}
