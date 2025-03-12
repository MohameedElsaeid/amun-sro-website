        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class UniqueRanking extends Model
        {
            protected $table = '_UniqueRanking';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'CodeName128', 'points'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'points' => 'integer',
    ];
        }