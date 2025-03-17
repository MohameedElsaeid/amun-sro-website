<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockedUser extends Model
{
    public $timestamps = false;
    protected $table = '_BlockedUser';
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
