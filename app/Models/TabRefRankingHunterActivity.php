<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingHunterActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingHunterActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefRankingHunterActivity query()
 * @mixin \Eloquent
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
}
