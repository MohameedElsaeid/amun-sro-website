<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefMappingShopWithTab newModelQuery()
 * @method static Builder<static>|RefMappingShopWithTab newQuery()
 * @method static Builder<static>|RefMappingShopWithTab query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
