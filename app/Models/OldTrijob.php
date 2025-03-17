<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OldTrijob newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OldTrijob newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OldTrijob query()
 * @mixin \Eloquent
 */
class OldTrijob extends Model
{
    public $timestamps = false;
    protected $table = '_OldTrijob';
    protected $fillable = [
        'CharID', 'JobLvl_Trader', 'Trader_Exp', 'JobLvl_Robber', 'Robber_Exp', 'JobLvl_Hunter', 'Hunter_Exp'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'JobLvl_Trader' => 'integer',
        'Trader_Exp' => 'integer',
        'JobLvl_Robber' => 'integer',
        'Robber_Exp' => 'integer',
        'JobLvl_Hunter' => 'integer',
        'Hunter_Exp' => 'integer',
    ];
    protected $connection = 'proxy';
}
