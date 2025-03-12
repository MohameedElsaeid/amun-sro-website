        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TrainingCamp extends Model
        {
            protected $table = '_TrainingCamp';
            public $timestamps = false;

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
        }