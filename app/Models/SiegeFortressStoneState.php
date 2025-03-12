<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortressStoneState newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortressStoneState newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiegeFortressStoneState query()
 * @mixin \Eloquent
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
}
