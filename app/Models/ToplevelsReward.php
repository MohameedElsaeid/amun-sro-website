<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToplevelsReward extends Model
{
    public $timestamps = false;
    protected $table = '_ToplevelsReward';
    protected $fillable = [
        'Silk1', 'Silk2', 'Silk3', 'Reward1Top100', 'Reward1Count100', 'Reward2Top100', 'Reward2Count100', 'Reward3Top100', 'Reward3Count100', 'Reward1Top200', 'Reward1Count200', 'Reward2Top200', 'Reward2Count200', 'Reward3Top200', 'Reward3Count200', 'Reward1Top300', 'Reward1Count300', 'Reward2Top300', 'Reward2Count300', 'Reward3Top300', 'Reward3Count300', 'RewardMale', 'RewardMaleCount', 'RewardFemale', 'RewardFemaleCount'
    ];

    protected $casts = [
        'Silk1' => 'integer',
        'Silk2' => 'integer',
        'Silk3' => 'integer',
        'Reward1Count100' => 'integer',
        'Reward2Count100' => 'integer',
        'Reward3Count100' => 'integer',
        'Reward1Count200' => 'integer',
        'Reward2Count200' => 'integer',
        'Reward3Count200' => 'integer',
        'Reward1Count300' => 'integer',
        'Reward2Count300' => 'integer',
        'Reward3Count300' => 'integer',
        'RewardMaleCount' => 'integer',
        'RewardFemaleCount' => 'integer',
    ];
}
