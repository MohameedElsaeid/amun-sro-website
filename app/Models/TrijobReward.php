<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrijobReward extends Model
{
    public $timestamps = false;
    protected $table = '_TrijobRewards';
    protected $fillable = [
        'JobType', 'Reward'
    ];

    protected $casts = [
        'JobType' => 'integer',
        'Reward' => 'integer',
    ];
}
