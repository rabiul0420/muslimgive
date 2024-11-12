<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    protected $table='charities';

    protected $fillable = [
        'title','ceo','logo','website','link_to_cra_return','fiscal_year_end','auditors','charitable_reg_since','notes','country_id'
    ];

    public function charity_ca1()
    {
        return $this->hasOne('App\Models\CharityCa1');
    }

    public function charity_ca2()
    {
        return $this->hasOne('App\Models\CharityCa2');
    }

    public function charity_ca3()
    {
        return $this->hasOne('App\Models\CharityCa3');
    }

    public function charity_ca4()
    {
        return $this->hasOne('App\Models\CharityCa4');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Countries');
    }

}
