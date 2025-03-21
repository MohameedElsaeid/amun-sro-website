<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|KillHistory newModelQuery()
 * @method static Builder<static>|KillHistory newQuery()
 * @method static Builder<static>|KillHistory query()
 * @mixin Eloquent
 */
class KillHistory extends Model
{
    public $timestamps = false;
    protected $table = '_KillHistory';
    protected $fillable = [
        'CharId', 'DeathCharId', 'CharLevel', 'DeathCharLevel', 'isJob', 'timestamp'
    ];

    protected $casts = [
        'CharId' => 'integer',
        'DeathCharId' => 'integer',
        'CharLevel' => 'integer',
        'DeathCharLevel' => 'integer',
        'isJob' => 'integer',
        'timestamp' => 'integer',
    ];
    protected $connection = 'proxy';
}
