<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CharTrijob newModelQuery()
 * @method static Builder<static>|CharTrijob newQuery()
 * @method static Builder<static>|CharTrijob query()
 * @mixin Eloquent
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
