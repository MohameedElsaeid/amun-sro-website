<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TrainingCampHonorRankUpdateDate newModelQuery()
 * @method static Builder<static>|TrainingCampHonorRankUpdateDate newQuery()
 * @method static Builder<static>|TrainingCampHonorRankUpdateDate query()
 * @mixin Eloquent
 */
class TrainingCampHonorRankUpdateDate extends Model
{
    public $timestamps = false;
    protected $table = '_TrainingCampHonorRankUpdateDate';
    protected $fillable = [
        'LastUpdateDate'
    ];

    protected $casts = [
        'LastUpdateDate' => 'datetime',
    ];
    protected $connection = 'proxy';
}
