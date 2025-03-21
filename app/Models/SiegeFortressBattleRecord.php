<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SiegeFortressBattleRecord newModelQuery()
 * @method static Builder<static>|SiegeFortressBattleRecord newQuery()
 * @method static Builder<static>|SiegeFortressBattleRecord query()
 * @mixin Eloquent
 */
class SiegeFortressBattleRecord extends Model
{
    public $timestamps = false;
    protected $table = '_SiegeFortressBattleRecord';
    protected $fillable = [
        'FortressID', 'CharID', 'KillCount', 'KilledCount', 'RankUpDate', 'CurRank'
    ];

    protected $casts = [
        'FortressID' => 'integer',
        'CharID' => 'integer',
        'KillCount' => 'integer',
        'KilledCount' => 'integer',
        'RankUpDate' => 'datetime',
        'CurRank' => 'integer',
    ];
    protected $connection = 'proxy';
}
