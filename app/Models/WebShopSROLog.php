<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|WebShopSROLog newModelQuery()
 * @method static Builder<static>|WebShopSROLog newQuery()
 * @method static Builder<static>|WebShopSROLog query()
 * @mixin Eloquent
 */
class WebShopSROLog extends Model
{
    public $timestamps = false;
    protected $table = '_WebShop_SRO_Log';
    protected $fillable = [
        'ID', 'JID', 'IP', 'CodeName128', 'Balance_Before_Buy', 'Balance_After_Buy'
    ];

    protected $casts = [
        'ID' => 'integer',
        'JID' => 'integer',
        'Balance_Before_Buy' => 'float',
        'Balance_After_Buy' => 'float',
    ];
    protected $connection = 'proxy';
}
