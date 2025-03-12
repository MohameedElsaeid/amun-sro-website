<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortressBattleRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortressBattleRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortressBattleRecord query()
 * @mixin \Eloquent
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
}
