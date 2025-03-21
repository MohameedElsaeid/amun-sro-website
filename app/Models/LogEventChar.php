<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|LogEventChar newModelQuery()
 * @method static Builder<static>|LogEventChar newQuery()
 * @method static Builder<static>|LogEventChar query()
 * @mixin Eloquent
 */
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
    protected $connection = 'log';
}
