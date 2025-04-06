<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|ServerEvent newModelQuery()
 * @method static Builder<static>|ServerEvent newQuery()
 * @method static Builder<static>|ServerEvent query()
 * @mixin Eloquent
 */
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
    protected $connection = 'proxy';
}
