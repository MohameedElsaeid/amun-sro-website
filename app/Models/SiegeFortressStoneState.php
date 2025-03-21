<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SiegeFortressStoneState newModelQuery()
 * @method static Builder<static>|SiegeFortressStoneState newQuery()
 * @method static Builder<static>|SiegeFortressStoneState query()
 * @mixin Eloquent
 */
class SiegeFortressStoneState extends Model
{
    public $timestamps = false;
    protected $table = '_SiegeFortressStoneState';
    protected $fillable = [
        'FortressID', 'GuildID', 'AccumulateDamage'
    ];

    protected $casts = [
        'FortressID' => 'integer',
        'GuildID' => 'integer',
        'AccumulateDamage' => 'integer',
    ];
    protected $connection = 'proxy';
}
