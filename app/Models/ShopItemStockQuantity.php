<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|ShopItemStockQuantity newModelQuery()
 * @method static Builder<static>|ShopItemStockQuantity newQuery()
 * @method static Builder<static>|ShopItemStockQuantity query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
