        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SrZorUnique extends Model
        {
            protected $table = 'srZor_uniques';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'CharName', 'MobName', 'time'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }