<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SRCharAppoint extends Model
{
    public $timestamps = false;
    protected $table = 'SR_CharAppoint';
    protected $fillable = [
        'UserJID', 'ShardID', 'CharID'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'ShardID' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
