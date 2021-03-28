<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    // use HasFactory;
    public function Teachers()
    {
        return $this->belongTo('App\Teachers' );
    }

    public function Students()
    {
        return $this->belongsTo('App/Students', 'subject_id');
    }
}
