<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    // use HasFactory;
    public function Subjects()
    {
        return $this->hasMany('App\Subjects', 'subject_id');
    }

    public function Teachers()
    {
        return $this->hasMany('App\Teachers', 'teacher_id');
    }
}
