<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TrainingCampHonorRank newModelQuery()
 * @method static Builder<static>|TrainingCampHonorRank newQuery()
 * @method static Builder<static>|TrainingCampHonorRank query()
 * @mixin Eloquent
 */
class TrainingCampHonorRank extends Model
{
    public $timestamps = false;
    protected $table = '_TrainingCampHonorRank';
    protected $fillable = [
        'Ranking', 'CampID', 'Rank'
    ];

    protected $casts = [
        'Ranking' => 'integer',
        'CampID' => 'integer',
        'Rank' => 'integer',
    ];
    protected $connection = 'proxy';
}
