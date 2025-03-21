<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TrijobRanking4WEB newModelQuery()
 * @method static Builder<static>|TrijobRanking4WEB newQuery()
 * @method static Builder<static>|TrijobRanking4WEB query()
 * @mixin Eloquent
 */
class TrijobRanking4WEB extends Model
{
    public $timestamps = false;
    protected $table = '_TrijobRanking4WEB';
    protected $fillable = [
        'TrijobType', 'RankType', 'Rank', 'NickName', 'JobLevel', 'JobData', 'IsNewEntry', 'RankDelta', 'Country'
    ];

    protected $casts = [
        'TrijobType' => 'integer',
        'RankType' => 'integer',
        'Rank' => 'integer',
        'JobLevel' => 'integer',
        'JobData' => 'integer',
        'IsNewEntry' => 'integer',
        'RankDelta' => 'integer',
        'Country' => 'integer',
    ];
    protected $connection = 'proxy';
}
