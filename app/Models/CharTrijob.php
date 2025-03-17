<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharTrijob newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharTrijob newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharTrijob query()
 * @mixin \Eloquent
 */
class CharTrijob extends Model
{
    public $timestamps = false;
    protected $table = '_CharTrijob';
    protected $fillable = [
        'CharID', 'JobType', 'Level', 'Exp', 'Contribution', 'Reward'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'JobType' => 'integer',
        'Level' => 'integer',
        'Exp' => 'integer',
        'Contribution' => 'integer',
        'Reward' => 'integer',
    ];
    protected $connection = 'proxy';
}
