<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefEvent newModelQuery()
 * @method static Builder<static>|RefEvent newQuery()
 * @method static Builder<static>|RefEvent query()
 * @mixin Eloquent
 */
class RefEvent extends Model
{
    public $timestamps = false;
    protected $table = '_RefEvent';
    protected $fillable = [
        'Service', 'ID', 'CodeName', 'DescName', 'ScheduleName', 'ScheduleCount'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'ScheduleCount' => 'integer',
    ];
    protected $connection = 'proxy';
}
