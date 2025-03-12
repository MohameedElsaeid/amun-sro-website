<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefPricePolicyOfItem extends Model
{
    public $timestamps = false;
    protected $table = '_RefPricePolicyOfItem';
    protected $fillable = [
        'Service', 'Country', 'RefPackageItemCodeName', 'PaymentDevice', 'PreviousCost', 'Cost', 'Param1', 'Param1_Desc128', 'Param2', 'Param2_Desc128', 'Param3', 'Param3_Desc128', 'Param4', 'Param4_Desc128', 'index'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
        'PaymentDevice' => 'integer',
        'PreviousCost' => 'integer',
        'Cost' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
        'index' => 'integer',
    ];
}
