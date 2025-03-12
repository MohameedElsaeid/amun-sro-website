<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrijobReward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrijobReward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrijobReward query()
 * @mixin \Eloquent
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
}
