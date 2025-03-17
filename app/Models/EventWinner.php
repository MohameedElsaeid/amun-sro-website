<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventWinner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventWinner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EventWinner query()
 * @mixin \Eloquent
 */
class EventWinner extends Model
{
    public $timestamps = false;
    protected $table = 'EventWinners';
    protected $fillable = [
        'CharId', 'EventName', 'Wins'
    ];

    protected $casts = [
        'Wins' => 'integer',
    ];
    protected $connection = 'event';
}
