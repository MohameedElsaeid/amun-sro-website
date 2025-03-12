<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShardCurrentUser extends Model
{
    public $timestamps = false;
    protected $table = '_ShardCurrentUser';
    protected $fillable = [
        'nID', 'nShardID', 'nUserCount', 'dLogDate'
    ];

    protected $casts = [
        'nID' => 'integer',
        'nShardID' => 'integer',
        'nUserCount' => 'integer',
        'dLogDate' => 'datetime',
    ];
}
