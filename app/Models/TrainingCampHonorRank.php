<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampHonorRank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampHonorRank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampHonorRank query()
 * @mixin \Eloquent
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
