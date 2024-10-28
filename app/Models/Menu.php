<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='menu';
    protected $fillable = [
        'title','parent_id','link','target','priority','menu_type','user_id','status'
    ];
}
