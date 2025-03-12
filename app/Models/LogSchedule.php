<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogSchedule extends Model
{
    public $timestamps = false;
    protected $table = '_LogSchedule';
    protected $fillable = [
        'ID', 'ServerType', 'ServerBodyID', 'ScheduleDefine', 'ScheduleIdx', 'Type', 'OccureTime'
    ];

    protected $casts = [
        'ID' => 'integer',
        'ServerBodyID' => 'integer',
        'ScheduleIdx' => 'integer',
        'OccureTime' => 'datetime',
    ];
}
