<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RoyalCoinLogHunter newModelQuery()
 * @method static Builder<static>|RoyalCoinLogHunter newQuery()
 * @method static Builder<static>|RoyalCoinLogHunter query()
 * @mixin Eloquent
 */
class RoyalCoinLogHunter extends Model
{
    public $timestamps = false;
    protected $table = 'RoyalCoinLogHunters';
    protected $fillable = [
        'CharID', 'Amount', 'EventTime'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Amount' => 'integer',
        'EventTime' => 'datetime',
    ];
    protected $connection = 'log';
}
