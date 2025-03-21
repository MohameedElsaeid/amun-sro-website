<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TabRefRankingRobberContribution newModelQuery()
 * @method static Builder<static>|TabRefRankingRobberContribution newQuery()
 * @method static Builder<static>|TabRefRankingRobberContribution query()
 * @mixin Eloquent
 */
class TabRefRankingRobberContribution extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefRanking_RobberContribution';
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
