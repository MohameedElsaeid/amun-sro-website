        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class EvangelionUnique extends Model
        {
            protected $table = 'Evangelion_uniques';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'CharName', 'MobName', 'time'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }