<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
