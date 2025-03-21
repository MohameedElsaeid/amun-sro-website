<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TrainingCampSubMentorHonorPoint newModelQuery()
 * @method static Builder<static>|TrainingCampSubMentorHonorPoint newQuery()
 * @method static Builder<static>|TrainingCampSubMentorHonorPoint query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
