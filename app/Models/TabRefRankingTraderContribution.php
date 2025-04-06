<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TabRefRankingTraderContribution newModelQuery()
 * @method static Builder<static>|TabRefRankingTraderContribution newQuery()
 * @method static Builder<static>|TabRefRankingTraderContribution query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
