<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|LogServerEvent newModelQuery()
 * @method static Builder<static>|LogServerEvent newQuery()
 * @method static Builder<static>|LogServerEvent query()
 * @mixin Eloquent
 */
class LogServerEvent extends Model
{
    public $timestamps = false;
    protected $table = '_LogServerEvent';
    protected $fillable = [
        'ID', 'EventTime', 'ServerEventID', 'LogType', 'strDesc'
    ];

    protected $casts = [
        'ID' => 'integer',
        'EventTime' => 'datetime',
        'ServerEventID' => 'integer',
        'LogType' => 'integer',
    ];
    protected $connection = 'log';
}
