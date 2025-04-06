<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|LogSchedule newModelQuery()
 * @method static Builder<static>|LogSchedule newQuery()
 * @method static Builder<static>|LogSchedule query()
 * @mixin Eloquent
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
    protected $connection = 'log';
}
