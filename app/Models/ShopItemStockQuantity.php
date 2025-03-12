<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShopItemStockQuantity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShopItemStockQuantity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShopItemStockQuantity query()
 * @mixin \Eloquent
 */
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
