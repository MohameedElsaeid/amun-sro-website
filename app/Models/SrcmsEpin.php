        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SrcmsEpin extends Model
        {
            protected $table = 'srcms_epin';
            public $timestamps = false;

            protected $fillable = [
                'code', 'silkAmount'
            ];

            protected $casts = [
                'code' => 'integer',
        'silkAmount' => 'integer',
    ];
        }