<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|GuildWar newModelQuery()
 * @method static Builder<static>|GuildWar newQuery()
 * @method static Builder<static>|GuildWar query()
 * @mixin Eloquent
 */
class GuildWar extends Model
{
    public $timestamps = false;
    protected $table = '_GuildWar';
    protected $fillable = [
        'ID', 'WarType', 'VictoryPointIndex', 'LodgedGold', 'WarEndTime', 'Guild1', 'Guild2', 'PointGain1', 'PointGain2', 'Data1', 'Data2'
    ];

    protected $casts = [
        'ID' => 'integer',
        'WarType' => 'integer',
        'VictoryPointIndex' => 'integer',
        'LodgedGold' => 'integer',
        'WarEndTime' => 'datetime',
        'Guild1' => 'integer',
        'Guild2' => 'integer',
        'PointGain1' => 'integer',
        'PointGain2' => 'integer',
        'Data1' => 'integer',
        'Data2' => 'integer',
    ];
    protected $connection = 'proxy';
}
