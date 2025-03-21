<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefMappingShopGroup newModelQuery()
 * @method static Builder<static>|RefMappingShopGroup newQuery()
 * @method static Builder<static>|RefMappingShopGroup query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
