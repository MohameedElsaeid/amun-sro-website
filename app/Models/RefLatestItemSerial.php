        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefLatestItemSerial extends Model
        {
            protected $table = '_RefLatestItemSerial';
            public $timestamps = false;

            protected $fillable = [
                'LatestItemSerial'
            ];

            protected $casts = [
                'LatestItemSerial' => 'integer',
    ];
        }