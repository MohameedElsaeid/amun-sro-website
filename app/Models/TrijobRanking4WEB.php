<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
