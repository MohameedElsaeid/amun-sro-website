<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogServerEvent extends Model
{
    public $timestamps = false;
    protected $table = '_LogServerEvent';
    protected $fillable = [
        'ID', 'EventTime', 'ServerEventID', 'LogType', 'strDesc'
    ];

    protected $casts = [
        'ID' => 'integer',
        'EventTime' => 'datetime',
        'ServerEventID' => 'integer',
        'LogType' => 'integer',
    ];
}
