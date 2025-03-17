<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrijobRankingStatus extends Model
{
    public $timestamps = false;
    protected $table = '__TrijobRankingStatus__';
    protected $fillable = [
        'ShardID', 'Status', 'UpdateTime'
    ];

    protected $casts = [
        'ShardID' => 'integer',
        'Status' => 'integer',
        'UpdateTime' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
