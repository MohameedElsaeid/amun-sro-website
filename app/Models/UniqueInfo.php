        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class UniqueInfo extends Model
        {
            protected $table = '_UniqueInfo';
            public $timestamps = false;

            protected $fillable = [
                'CodeName128', 'Name', 'Point'
            ];

            protected $casts = [
                'Point' => 'integer',
    ];
        }