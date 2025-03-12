        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class MaxLevelKontrol extends Model
        {
            protected $table = '_MaxLevelKontrol';
            public $timestamps = false;

            protected $fillable = [
                'CharName', 'Zaman', 'index'
            ];

            protected $casts = [
                'Zaman' => 'datetime',
        'index' => 'integer',
    ];
        }