<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKSHL extends Model
{
    public $timestamps = false;
    protected $table = 'SK_SHL';
    protected $fillable = [
        'idx', 'JID', 'COS', 'CGS', 'HOS', 'HGS', 'event_time'
    ];

    protected $casts = [
        'idx' => 'integer',
        'JID' => 'integer',
        'COS' => 'integer',
        'CGS' => 'integer',
        'HOS' => 'integer',
        'HGS' => 'integer',
        'event_time' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
