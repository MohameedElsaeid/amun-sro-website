<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|OldTrijob newModelQuery()
 * @method static Builder<static>|OldTrijob newQuery()
 * @method static Builder<static>|OldTrijob query()
 * @mixin Eloquent
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
