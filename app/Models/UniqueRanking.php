<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniqueRanking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniqueRanking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniqueRanking query()
 * @mixin \Eloquent
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
