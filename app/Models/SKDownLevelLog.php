<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKDownLevelLog extends Model
{
    public $timestamps = false;
    protected $table = 'SK_DownLevelLog';
    protected $fillable = [
        'JID', 'struserid', 'charname', 'package', 'newlevel', 'server', 'timedown'
    ];

    protected $casts = [
        'JID' => 'integer',
        'timedown' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
