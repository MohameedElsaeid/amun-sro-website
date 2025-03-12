<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceManagerLog extends Model
{
    public $timestamps = false;
    protected $table = '_ServiceManagerLog';
    protected $fillable = [
        'nUserID', 'EventTime', 'szLog'
    ];

    protected $casts = [
        'nUserID' => 'integer',
        'EventTime' => 'datetime',
    ];
}
