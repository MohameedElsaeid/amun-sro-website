        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class LatestItemSerial extends Model
        {
            protected $table = '_LatestItemSerial';
            public $timestamps = false;

            protected $fillable = [
                'LatestItemSerial'
            ];

            protected $casts = [
                'LatestItemSerial' => 'integer',
    ];
        }