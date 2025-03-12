<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OldBlockedUser extends Model
{
    public $timestamps = false;
    protected $table = '_OldBlockedUser';
    protected $fillable = [
        'UserJID', 'Type', 'SerialNo', 'timeBegin', 'timeEnd'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'Type' => 'integer',
        'SerialNo' => 'integer',
        'timeBegin' => 'datetime',
        'timeEnd' => 'datetime',
    ];
}
