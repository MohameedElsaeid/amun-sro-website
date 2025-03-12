        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TrainingCampBuffStatus extends Model
        {
            protected $table = '_TrainingCampBuffStatus';
            public $timestamps = false;

            protected $fillable = [
                'CampID', 'RecipientCharID', 'BuffSlotIdx', 'DonorCharID', 'StartingTime', 'RemainBuffPoint', 'BuffType'
            ];

            protected $casts = [
                'CampID' => 'integer',
        'RecipientCharID' => 'integer',
        'BuffSlotIdx' => 'integer',
        'DonorCharID' => 'integer',
        'StartingTime' => 'datetime',
        'RemainBuffPoint' => 'integer',
        'BuffType' => 'integer',
    ];
        }