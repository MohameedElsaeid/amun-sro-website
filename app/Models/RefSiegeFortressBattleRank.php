<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressBattleRank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressBattleRank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressBattleRank query()
 * @mixin \Eloquent
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
}
