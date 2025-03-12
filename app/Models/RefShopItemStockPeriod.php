<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefShopItemStockPeriod extends Model
{
    public $timestamps = false;
    protected $table = '_RefShopItemStockPeriod';
    protected $fillable = [
        'Service', 'Country', 'ID', 'RefShopGroupCodeName', 'RefPackageItemCodeName', 'StockOpeningDate', 'StockExpireDate', 'PeriodDevice'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
        'ID' => 'integer',
        'StockOpeningDate' => 'datetime',
        'StockExpireDate' => 'datetime',
        'PeriodDevice' => 'integer',
    ];
}
