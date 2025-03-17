<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SRShardCharName extends Model
{
    public $timestamps = false;
    protected $table = 'SR_ShardCharNames';
    protected $fillable = [
        'UserJID', 'ShardID', 'CharName'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'ShardID' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
