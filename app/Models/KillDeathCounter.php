<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|KillDeathCounter newModelQuery()
 * @method static Builder<static>|KillDeathCounter newQuery()
 * @method static Builder<static>|KillDeathCounter query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
