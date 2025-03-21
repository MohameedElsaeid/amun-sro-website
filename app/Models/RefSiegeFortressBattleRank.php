<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSiegeFortressBattleRank newModelQuery()
 * @method static Builder<static>|RefSiegeFortressBattleRank newQuery()
 * @method static Builder<static>|RefSiegeFortressBattleRank query()
 * @mixin Eloquent
 */
class RefSiegeFortressBattleRank extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeFortressBattleRank';
    protected $fillable = [
        'Service', 'RankLvl', 'RankName', 'ReqPKCount', 'BindedSkillID', 'CrestPath128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'RankLvl' => 'integer',
        'ReqPKCount' => 'integer',
        'BindedSkillID' => 'integer',
    ];
    protected $connection = 'proxy';
}
