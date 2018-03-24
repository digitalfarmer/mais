<?php

namespace mais;

use Illuminate\Database\Eloquent\Model;

class MsProduct extends Model
{
     protected $table ='vw_master_product_unit';
     protected $fillable=[
        'product_id',
        'product_code',
        'principal_id',
        'product_category_id',
        'product_division_id',
        'product_name',
        'default_unit_id',
        'crea_date',
        'modi_date',
        'crea_user_id',
        'modi_user_id',
        'active_status',
        'principal_code',
        'principal_name',
        'product_category_code',
        'product_category_name',
        'product_division_code',
        'product_division_description',
        'unit',
        'buy_price',
        'sale_price'
     ];
     public $timestamp='false';
}
