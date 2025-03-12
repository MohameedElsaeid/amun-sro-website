<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampHonorRankUpdateDate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampHonorRankUpdateDate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampHonorRankUpdateDate query()
 * @mixin \Eloquent
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
}
