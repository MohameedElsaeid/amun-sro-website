<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServerEvent extends Model
{
    public $timestamps = false;
    protected $table = '_ServerEvent';
    protected $fillable = [
        'ID', 'CompletionValue', 'AchievementCondition', 'ProgressCount'
    ];

    protected $casts = [
        'ID' => 'integer',
        'CompletionValue' => 'integer',
        'AchievementCondition' => 'integer',
        'ProgressCount' => 'integer',
    ];
}
