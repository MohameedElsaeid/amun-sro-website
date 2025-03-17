<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopGood newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopGood newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopGood query()
 * @mixin \Eloquent
 */
class RefShopGood extends Model
{
    public $timestamps = false;
    protected $table = '_RefShopGoods';
    protected $fillable = [
        'Service', 'Country', 'RefTabCodeName', 'RefPackageItemCodeName', 'SlotIndex', 'Param1', 'Param1_Desc128', 'Param2', 'Param2_Desc128', 'Param3', 'Param3_Desc128', 'Param4', 'Param4_Desc128', 'index'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
        'SlotIndex' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
        'index' => 'integer',
    ];
    protected $connection = 'proxy';
}
