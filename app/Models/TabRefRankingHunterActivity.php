<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TabRefRankingHunterActivity newModelQuery()
 * @method static Builder<static>|TabRefRankingHunterActivity newQuery()
 * @method static Builder<static>|TabRefRankingHunterActivity query()
 * @mixin Eloquent
 */
class TabRefRankingHunterActivity extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefRanking_HunterActivity';
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
