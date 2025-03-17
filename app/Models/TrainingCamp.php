<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCamp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCamp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TrainingCamp query()
 * @mixin \Eloquent
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
