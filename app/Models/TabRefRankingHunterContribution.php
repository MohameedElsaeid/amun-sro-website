<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TabRefRankingHunterContribution newModelQuery()
 * @method static Builder<static>|TabRefRankingHunterContribution newQuery()
 * @method static Builder<static>|TabRefRankingHunterContribution query()
 * @mixin Eloquent
 */
class TabRefRankingHunterContribution extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefRanking_HunterContribution';
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
