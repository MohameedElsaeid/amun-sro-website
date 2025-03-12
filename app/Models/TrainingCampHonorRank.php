        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TrainingCampHonorRank extends Model
        {
            protected $table = '_TrainingCampHonorRank';
            public $timestamps = false;

            protected $fillable = [
                'Ranking', 'CampID', 'Rank'
            ];

            protected $casts = [
                'Ranking' => 'integer',
        'CampID' => 'integer',
        'Rank' => 'integer',
    ];
        }