<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Schedule newModelQuery()
 * @method static Builder<static>|Schedule newQuery()
 * @method static Builder<static>|Schedule query()
 * @mixin Eloquent
 */
class Schedule extends Model
{
    public $timestamps = false;
    protected $table = '_Schedule';
    protected $fillable = [
        'ScheduleIdx', 'ScheduleDefineIdx', 'DateStart', 'DateEnd', 'MainInterval_Type', 'MainInterval_TypeDate', 'SubInterval_DayOfWeek', 'SubInterval_Days', 'SubInterval_Weeks', 'SubInterval_Months', 'SubInterval_StartTimeHour', 'SubInterval_StartTimeMinute', 'SubInterval_StartTimeSecond', 'SubInterval_DurationSecond', 'SubInterval_RepititionTerm', 'SubInterval_MaintainTime', 'Param', 'Description'
    ];

    protected $casts = [
        'ScheduleIdx' => 'integer',
        'ScheduleDefineIdx' => 'integer',
        'DateStart' => 'datetime',
        'DateEnd' => 'datetime',
        'MainInterval_Type' => 'integer',
        'MainInterval_TypeDate' => 'integer',
        'SubInterval_DayOfWeek' => 'integer',
        'SubInterval_Days' => 'integer',
        'SubInterval_Weeks' => 'integer',
        'SubInterval_Months' => 'integer',
        'SubInterval_StartTimeHour' => 'integer',
        'SubInterval_StartTimeMinute' => 'integer',
        'SubInterval_StartTimeSecond' => 'integer',
        'SubInterval_DurationSecond' => 'integer',
        'SubInterval_RepititionTerm' => 'integer',
        'SubInterval_MaintainTime' => 'integer',
    ];
    protected $connection = 'proxy';
}
