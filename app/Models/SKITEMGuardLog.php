<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKITEMGuardLog extends Model
{
    public $timestamps = false;
    protected $table = 'SK_ITEM_GuardLog';
    protected $fillable = [
        'autoID', 'serial64', 'gremain', 'shardID', 'optionLvl', 'LastGuard'
    ];

    protected $casts = [
        'autoID' => 'integer',
        'serial64' => 'integer',
        'gremain' => 'integer',
        'shardID' => 'integer',
        'optionLvl' => 'integer',
        'LastGuard' => 'datetime',
    ];
}
