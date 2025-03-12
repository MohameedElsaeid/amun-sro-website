<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMappingShopGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMappingShopGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMappingShopGroup query()
 * @mixin \Eloquent
 */
class RefMappingShopGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefMappingShopGroup';
    protected $fillable = [
        'Service', 'Country', 'RefShopGroupCodeName', 'RefShopCodeName'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
    ];
}
