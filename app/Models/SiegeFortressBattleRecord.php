<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
