<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingTraderContribution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingTraderContribution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingTraderContribution query()
 * @mixin \Eloquent
 */
class TabRefRankingTraderContribution extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefRanking_TraderContribution';
    protected $fillable = [
        'Rank', 'NickName', 'JobLevel', 'Contribution'
    ];

    protected $casts = [
        'Rank' => 'integer',
        'JobLevel' => 'integer',
        'Contribution' => 'integer',
    ];
}
