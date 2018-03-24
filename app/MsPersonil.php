<?php

namespace mais;

use Illuminate\Database\Eloquent\Model;

class MsPersonil extends Model
{
    protected $table ='master_employee';
    protected $fillable=[
        'employee_id',
        'employee_code',
        'employee_name',
        'employee_date_of_birth',
        'job_position_id',
        'sign_in_date',
        'marital_status',
        'address_city_id',
        'address_district_id',
        'tax_number',
        'phone_number',
        'employee_status',
        'crea_date',
        'modi_date',
        'crea_user_id',
        'modi_user_id'
    ];
    public $timestamps=false;
}
