<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|FleaMarketNetwork newModelQuery()
 * @method static Builder<static>|FleaMarketNetwork newQuery()
 * @method static Builder<static>|FleaMarketNetwork query()
 * @mixin Eloquent
 */
class FleaMarketNetwork extends Model
{
    public $timestamps = false;
    protected $table = '_FleaMarketNetwork';
    protected $fillable = [
        'AbleOpen', 'CharID', 'Slot', 'TidGroupID', 'ItemClass', 'ItemCount', 'MakeZone', 'Cash'
    ];

    protected $casts = [
        'AbleOpen' => 'integer',
        'CharID' => 'integer',
        'Slot' => 'integer',
        'TidGroupID' => 'integer',
        'ItemClass' => 'integer',
        'ItemCount' => 'integer',
        'MakeZone' => 'integer',
        'Cash' => 'integer',
    ];
    protected $connection = 'proxy';
}
