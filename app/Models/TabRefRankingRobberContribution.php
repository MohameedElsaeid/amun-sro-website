<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingRobberContribution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingRobberContribution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingRobberContribution query()
 * @mixin \Eloquent
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
}
