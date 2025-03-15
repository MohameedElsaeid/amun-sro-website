<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharFreePVP newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharFreePVP newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharFreePVP query()
 * @mixin \Eloquent
 */
class CharFreePVP extends Model
{
    public $timestamps = false;
    protected $table = '_CharFreePVP';
    protected $fillable = [
        'CharID', 'Points', 'Kills', 'Deaths', 'LastKill', 'Date', 'CurChamp'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Points' => 'integer',
        'Kills' => 'integer',
        'Deaths' => 'integer',
        'Date' => 'datetime',
        'CurChamp' => 'integer',
    ];
    protected $connection = 'log';
}
