<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharityCommunicationLogs extends Model
{
    protected $table='charities_communication_logs';

    protected $fillable = [
        'title','charity_id','communication_type','communication_date','details'
    ];

}
