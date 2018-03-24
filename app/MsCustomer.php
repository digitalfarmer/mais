<?php

namespace mais;

use Illuminate\Database\Eloquent\Model;

class MsCustomer extends Model
{
    protected $table='master_customer';
    protected $fillable=[
        'customer_id',
        'customer_code',
        'customer_name',
        'customer_invoice_name',
        'customer_tax_name',
        'customer_cp',
        'customer_address',
        'customer_city_id',
        'customer_district_id',
        'customer_postal_code',
        'customer_phone_number',
        'tax_number',
        'customer_active_status',
        'crea_date',
        'modi_date',
        'crea_user_id',
        'modi_user_id'
    ];
}
