<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RowKill newModelQuery()
 * @method static Builder<static>|RowKill newQuery()
 * @method static Builder<static>|RowKill query()
 * @mixin Eloquent
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
