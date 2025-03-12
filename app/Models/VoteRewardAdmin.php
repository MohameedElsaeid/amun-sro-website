<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteRewardAdmin extends Model
{
    public $timestamps = false;
    protected $table = 'vote_reward_admins';
    protected $fillable = [
        'name'
    ];

    protected $casts = [
    ];
}
