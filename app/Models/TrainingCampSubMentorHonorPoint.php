        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TrainingCampSubMentorHonorPoint extends Model
        {
            protected $table = '_TrainingCampSubMentorHonorPoint';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'HonorPoint'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'HonorPoint' => 'integer',
    ];
        }