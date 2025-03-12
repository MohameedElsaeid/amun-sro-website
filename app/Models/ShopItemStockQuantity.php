<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopItemStockQuantity extends Model
{
    public $timestamps = false;
    protected $table = '_ShopItemStockQuantity';
    protected $fillable = [
        'Service', 'Country', 'RefShopGroupCodeName', 'RefPackageItemCodeName', 'ConstStockQuantity', 'StockQuantity'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
        'ConstStockQuantity' => 'integer',
        'StockQuantity' => 'integer',
    ];
}
