<?php

namespace mais;

use Illuminate\Database\Eloquent\Model;

class CallPlanModel extends Model
{
    protected $table='vw_salesperson_call_plan';
    protected $fillable=[
        'call_plan_id',
        'call_plan_date',
        'customer_id',
        'customer_code',
        'customer_name',
        'customer_address',
        'salesperson_id',
        'salesperson_code',
        'salesperson_name',
        'call_plan_result',
        'call_plan_status',
        'call_plan_description',
        'call_plan_target_qty',
        'call_plan_target_ammount',

    ];
    protected $timestamp='false';
}
