<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingTraderActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingTraderActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingTraderActivity query()
 * @mixin \Eloquent
 */
class TabRefRankingTraderActivity extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefRanking_TraderActivity';
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
