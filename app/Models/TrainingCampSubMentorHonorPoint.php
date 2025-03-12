<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampSubMentorHonorPoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampSubMentorHonorPoint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCampSubMentorHonorPoint query()
 * @mixin \Eloquent
 */
class TrainingCampSubMentorHonorPoint extends Model
{
    public $timestamps = false;
    protected $table = '_TrainingCampSubMentorHonorPoint';
    protected $fillable = [
        'CharID', 'HonorPoint'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'HonorPoint' => 'integer',
    ];
}
