<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabRefRankingTraderActivity extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefRanking_TraderActivity';
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
