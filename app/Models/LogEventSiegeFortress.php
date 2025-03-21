<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|LogEventSiegeFortress newModelQuery()
 * @method static Builder<static>|LogEventSiegeFortress newQuery()
 * @method static Builder<static>|LogEventSiegeFortress query()
 * @mixin Eloquent
 */
class LogEventSiegeFortress extends Model
{
    public $timestamps = false;
    protected $table = '_LogEventSiegeFortress';
    protected $fillable = [
        'ID', 'FortressID', 'EventTime', 'EventID', 'CharID', 'Data1', 'Data2', 'strDesc'
    ];

    protected $casts = [
        'ID' => 'integer',
        'FortressID' => 'integer',
        'EventTime' => 'datetime',
        'EventID' => 'integer',
        'CharID' => 'integer',
        'Data1' => 'integer',
        'Data2' => 'integer',
    ];
    protected $connection = 'log';
}
