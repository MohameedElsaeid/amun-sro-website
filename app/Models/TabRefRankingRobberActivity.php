<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingRobberActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingRobberActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingRobberActivity query()
 * @mixin \Eloquent
 */
class TabRefRankingRobberActivity extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefRanking_RobberActivity';
    protected $fillable = [
        'Rank', 'NickName', 'JobLevel', 'JobExp', 'Country'
    ];

    protected $casts = [
        'Rank' => 'integer',
        'JobLevel' => 'integer',
        'JobExp' => 'integer',
        'Country' => 'integer',
    ];
    protected $connection = 'proxy';
}
