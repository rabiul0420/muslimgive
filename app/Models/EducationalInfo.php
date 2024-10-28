<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationalInfo extends Model
{
    protected $table='educational_infos';

    protected $fillable = [
        'institute_name','officer_contact_number','address','class_year','branch_name','course_title','user_id'
    ];

}
