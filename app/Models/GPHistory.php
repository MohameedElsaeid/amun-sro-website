<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GPHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GPHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GPHistory query()
 * @mixin \Eloquent
 */
class GPHistory extends Model
{
    public $timestamps = false;
    protected $table = '_GPHistory';
    protected $fillable = [
        'ID', 'GuildID', 'UsedTime', 'CharName', 'UsedGP', 'Reason'
    ];

    protected $casts = [
        'ID' => 'integer',
        'GuildID' => 'integer',
        'UsedTime' => 'datetime',
        'UsedGP' => 'integer',
        'Reason' => 'integer',
    ];
    protected $connection = 'proxy';
}
