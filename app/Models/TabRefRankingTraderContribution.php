<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabRefRankingTraderContribution extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefRanking_TraderContribution';
    protected $fillable = [
        'Rank', 'NickName', 'JobLevel', 'Contribution'
    ];

    protected $casts = [
        'Rank' => 'integer',
        'JobLevel' => 'integer',
        'Contribution' => 'integer',
    ];
}
