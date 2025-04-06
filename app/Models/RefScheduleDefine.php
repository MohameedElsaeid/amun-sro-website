<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefScheduleDefine newModelQuery()
 * @method static Builder<static>|RefScheduleDefine newQuery()
 * @method static Builder<static>|RefScheduleDefine query()
 * @mixin Eloquent
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
