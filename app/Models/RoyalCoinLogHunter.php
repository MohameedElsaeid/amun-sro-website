<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoyalCoinLogHunter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoyalCoinLogHunter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RoyalCoinLogHunter query()
 * @mixin \Eloquent
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
