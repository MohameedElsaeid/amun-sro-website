        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Magopt extends Model
        {
            protected $table = '_Magopt';
            public $timestamps = false;

            protected $fillable = [
                'name', 'desc', 'mLevel', 'extension', 'sortkey'
            ];

            protected $casts = [
                'mLevel' => 'integer',
        'sortkey' => 'integer',
    ];
        }