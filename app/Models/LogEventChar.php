<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogEventChar extends Model
{
    public $timestamps = false;
    protected $table = '_LogEventChar';
    protected $fillable = [
        'CharID', 'EventTime', 'EventID', 'Data1', 'Data2', 'EventPos', 'strDesc'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'EventTime' => 'datetime',
        'EventID' => 'integer',
        'Data1' => 'integer',
        'Data2' => 'integer',
    ];
}
