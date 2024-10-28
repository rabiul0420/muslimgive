<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharityProfile extends Model
{
    protected $table='charities';

    protected $fillable = [
        'title', 'logo','website','link_to_cra_return','fiscal_year_end','auditors','charitable_reg_since','notes'
    ];


}
