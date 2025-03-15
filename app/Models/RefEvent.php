<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefEvent query()
 * @mixin \Eloquent
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
