        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TabDBSafeCheckState extends Model
        {
            protected $table = 'Tab_DBSafe_CheckState';
            public $timestamps = false;

            protected $fillable = [
                'btCheckIn'
            ];

            protected $casts = [
                'btCheckIn' => 'integer',
    ];
        }