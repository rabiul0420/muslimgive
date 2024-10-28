<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='product';

    protected $fillable = [
        'logo','title', 'product_type_id','status'
    ];
}
