<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table='pages';

    protected $fillable = [
        'title','slug','short_description','description','template','image','attachment_name','attachment','extra','extra1'
    ];
}
