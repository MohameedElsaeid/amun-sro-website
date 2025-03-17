<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginLogoutStatistic extends Model
{
    public $timestamps = false;
    protected $table = '_LoginLogoutStatistics';
    protected $fillable = [
        'nIdx', 'nJID', 'nIP', 'dLogin', 'dLogout', 'byReserved'
    ];

    protected $casts = [
        'nIdx' => 'integer',
        'nJID' => 'integer',
        'nIP' => 'integer',
        'dLogin' => 'datetime',
        'dLogout' => 'datetime',
        'byReserved' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
