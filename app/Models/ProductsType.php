<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsType extends Model
{
    protected $table='product_type';

    protected $fillable = [
        'title','link','short_description','image'
    ];
}
