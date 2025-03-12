        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TrainingCampHonorRankUpdateDate extends Model
        {
            protected $table = '_TrainingCampHonorRankUpdateDate';
            public $timestamps = false;

            protected $fillable = [
                'LastUpdateDate'
            ];

            protected $casts = [
                'LastUpdateDate' => 'datetime',
    ];
        }