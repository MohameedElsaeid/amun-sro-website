<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KillDeathCounter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KillDeathCounter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KillDeathCounter query()
 * @mixin \Eloquent
 */
class KillDeathCounter extends Model
{
    public $timestamps = false;
    protected $table = '_KillDeathCounter';
    protected $fillable = [
        'CharId', 'deaths', 'kills', 'code', 'timestamp'
    ];

    protected $casts = [
        'CharId' => 'integer',
        'deaths' => 'integer',
        'kills' => 'integer',
        'timestamp' => 'integer',
    ];
}
