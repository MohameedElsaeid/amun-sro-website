<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefShopItemStockPeriod newModelQuery()
 * @method static Builder<static>|RefShopItemStockPeriod newQuery()
 * @method static Builder<static>|RefShopItemStockPeriod query()
 * @mixin Eloquent
 */
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
    protected $connection = 'proxy';
}
