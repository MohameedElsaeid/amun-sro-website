<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogServerEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogServerEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogServerEvent query()
 * @mixin \Eloquent
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
}
