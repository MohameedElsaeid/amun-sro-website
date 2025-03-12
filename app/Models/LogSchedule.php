<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogSchedule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogSchedule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogSchedule query()
 * @mixin \Eloquent
 */
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
