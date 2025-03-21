<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TrainingCamp newModelQuery()
 * @method static Builder<static>|TrainingCamp newQuery()
 * @method static Builder<static>|TrainingCamp query()
 * @mixin Eloquent
 */
class TrainingCamp extends Model
{
    public $timestamps = false;
    protected $table = '_TrainingCamp';
    protected $fillable = [
        'ID', 'CreationDate', 'Rank', 'GraduateCount', 'EvaluationPoint', 'LatestEvaluationDate', 'CommentTitle', 'Comment'
    ];

    protected $casts = [
        'ID' => 'integer',
        'CreationDate' => 'datetime',
        'Rank' => 'integer',
        'GraduateCount' => 'integer',
        'EvaluationPoint' => 'integer',
        'LatestEvaluationDate' => 'datetime',
    ];
    protected $connection = 'proxy';
}
