<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|EventWinner newModelQuery()
 * @method static Builder<static>|EventWinner newQuery()
 * @method static Builder<static>|EventWinner query()
 * @mixin Eloquent
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
