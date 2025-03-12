<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteRewardHacking extends Model
{
    public $timestamps = false;
    protected $table = 'vote_reward_hacking';
    protected $fillable = [
        'ip', 'data'
    ];

    protected $casts = [
    ];
}
