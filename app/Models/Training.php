<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table='training';

    protected $fillable = [
        'title', 'course_title','starting_date','duration','course_materials','image','link','status'
    ];
}
