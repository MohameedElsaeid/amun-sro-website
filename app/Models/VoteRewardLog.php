<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteRewardLog extends Model
{
    public $timestamps = false;
    protected $table = 'vote_reward_log';
    protected $fillable = [
        'username', 'ip', 'date'
    ];

    protected $casts = [
    ];
}
