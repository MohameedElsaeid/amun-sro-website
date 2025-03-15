<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteReward extends Model
{
    public $timestamps = false;
    protected $table = 'vote_reward';
    protected $fillable = [
        'StrUserID', 'votelaikas', 'ip', 'top1', 'votekey', 'top2', 'top3', 'top4', 'top5'
    ];

    protected $casts = [
    ];
    protected $connection = 'sqlsrv';
}
