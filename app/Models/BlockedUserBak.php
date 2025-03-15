<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockedUserBak extends Model
{
    public $timestamps = false;
    protected $table = '_BlockedUser_bak';
    protected $fillable = [
        'UserJID', 'UserID', 'Type', 'SerialNo', 'timeBegin', 'timeEnd'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'Type' => 'integer',
        'SerialNo' => 'integer',
        'timeBegin' => 'datetime',
        'timeEnd' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
