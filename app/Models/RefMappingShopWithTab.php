<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMappingShopWithTab newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMappingShopWithTab newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMappingShopWithTab query()
 * @mixin \Eloquent
 */
class RefMappingShopWithTab extends Model
{
    public $timestamps = false;
    protected $table = '_RefMappingShopWithTab';
    protected $fillable = [
        'Service', 'Country', 'RefShopCodeName', 'RefTabGroupCodeName'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
    ];
}
