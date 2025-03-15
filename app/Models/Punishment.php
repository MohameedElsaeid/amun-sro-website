<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Punishment extends Model
{
    public $timestamps = false;
    protected $table = '_Punishment';
    protected $fillable = [
        'SerialNo', 'UserJID', 'Type', 'Executor', 'Shard', 'CharName', 'CharInfo', 'PosInfo', 'Guide', 'Description', 'RaiseTime', 'BlockStartTime', 'BlockEndTime', 'PunishTime', 'Status'
    ];

    protected $casts = [
        'SerialNo' => 'integer',
        'UserJID' => 'integer',
        'Type' => 'integer',
        'Shard' => 'integer',
        'RaiseTime' => 'datetime',
        'BlockStartTime' => 'datetime',
        'BlockEndTime' => 'datetime',
        'PunishTime' => 'datetime',
        'Status' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
