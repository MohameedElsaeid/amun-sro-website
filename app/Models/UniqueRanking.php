<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|UniqueRanking newModelQuery()
 * @method static Builder<static>|UniqueRanking newQuery()
 * @method static Builder<static>|UniqueRanking query()
 * @mixin Eloquent
 */
class UniqueRanking extends Model
{
    public $timestamps = false;
    protected $table = '_UniqueRanking';
    protected $fillable = [
        'CharID', 'CodeName128', 'points'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'points' => 'integer',
    ];
    protected $connection = 'proxy';
}
