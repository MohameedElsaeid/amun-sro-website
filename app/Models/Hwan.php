        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Hwan extends Model
        {
            protected $table = 'Hwan';
            public $timestamps = false;

            protected $fillable = [
                'Hwan_Level', 'Title', 'Race', 'lvl'
            ];

            protected $casts = [
                'Hwan_Level' => 'integer',
        'lvl' => 'integer',
    ];
        }