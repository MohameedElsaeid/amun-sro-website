        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TEMPADDITEMEXTERNCHESTLOG extends Model
        {
            protected $table = '_TEMP_ADDITEMEXTERN_CHEST_LOG';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'LogString', 'LogDate'
            ];

            protected $casts = [
                'ID' => 'integer',
        'LogDate' => 'datetime',
    ];
        }