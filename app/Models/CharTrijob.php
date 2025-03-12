        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharTrijob extends Model
        {
            protected $table = '_CharTrijob';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'JobType', 'Level', 'Exp', 'Contribution', 'Reward'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'JobType' => 'integer',
        'Level' => 'integer',
        'Exp' => 'integer',
        'Contribution' => 'integer',
        'Reward' => 'integer',
    ];
        }