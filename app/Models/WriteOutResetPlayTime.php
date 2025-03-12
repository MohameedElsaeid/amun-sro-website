        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class WriteOutResetPlayTime extends Model
        {
            protected $table = '_WriteOutResetPlayTime';
            public $timestamps = false;

            protected $fillable = [
                'LatestResetTime'
            ];

            protected $casts = [
                'LatestResetTime' => 'integer',
    ];
        }