<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RowKill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RowKill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RowKill query()
 * @mixin \Eloquent
 */
class RowKill extends Model
{
    public $timestamps = false;
    protected $table = '_RowKills';
    protected $fillable = [
        'ID', 'KillerID', 'KilledID', 'Kills'
    ];

    protected $casts = [
        'ID' => 'integer',
        'KillerID' => 'integer',
        'Kills' => 'integer',
    ];
    protected $connection = 'log';
}
