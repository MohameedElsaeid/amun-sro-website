        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Top100 extends Model
        {
            protected $table = '_Top100';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'Data2'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'Data2' => 'integer',
    ];
        }