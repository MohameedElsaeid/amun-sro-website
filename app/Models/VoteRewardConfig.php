<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteRewardConfig extends Model
{
    public $timestamps = false;
    protected $table = 'vote_reward_config';
    protected $fillable = [
        'web_title', 'vote_time', 'url_top1', 'url_top2', 'reward', 'language', 'uniqueid'
    ];

    protected $casts = [
    ];
    protected $connection = 'sqlsrv';
}
