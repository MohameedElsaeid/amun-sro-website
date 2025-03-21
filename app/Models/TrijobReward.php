<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TrijobReward newModelQuery()
 * @method static Builder<static>|TrijobReward newQuery()
 * @method static Builder<static>|TrijobReward query()
 * @mixin Eloquent
 */
class TrijobReward extends Model
{
    public $timestamps = false;
    protected $table = '_TrijobRewards';
    protected $fillable = [
        'JobType', 'Reward'
    ];

    protected $casts = [
        'JobType' => 'integer',
        'Reward' => 'integer',
    ];
    protected $connection = 'proxy';
}
