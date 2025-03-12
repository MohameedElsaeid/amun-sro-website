        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RandomPlayer&Date extends Model
        {
            protected $table = '_RandomPlayer&Date';
            public $timestamps = false;

            protected $fillable = [
                'NextDate', 'RefreshedDate', 'CharID', 'Charname', 'Desc'
            ];

            protected $casts = [
                'NextDate' => 'datetime',
        'RefreshedDate' => 'datetime',
        'CharID' => 'integer',
    ];
        }