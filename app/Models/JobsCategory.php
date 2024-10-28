<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobsCategory extends Model
{
    protected $table='jobs_category';

    protected $fillable = [
        'title'
    ];

    public function jobs() {

        return $this->hasMany('App\Models\Jobs', 'category_id');

    }


    public $timestamps = false;
}
