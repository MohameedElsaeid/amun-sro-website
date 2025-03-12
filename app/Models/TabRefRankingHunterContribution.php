<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
