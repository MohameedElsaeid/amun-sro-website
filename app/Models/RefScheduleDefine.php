<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefScheduleDefine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefScheduleDefine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefScheduleDefine query()
 * @mixin \Eloquent
 */
class RefScheduleDefine extends Model
{
    public $timestamps = false;
    protected $table = '_RefScheduleDefine';
    protected $fillable = [
        'ScheduleDefineIdx', 'ScheduleName', 'Description'
    ];

    protected $casts = [
        'ScheduleDefineIdx' => 'integer',
    ];
    protected $connection = 'proxy';
}
