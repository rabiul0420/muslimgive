<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $table='slider';

    protected $fillable = [
        'title_top','title','title_bottom','button_title','button_link','link_target','image','category_id','status'
    ];
}
