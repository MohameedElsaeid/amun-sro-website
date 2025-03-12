        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefDropGold extends Model
        {
            protected $table = '_RefDropGold';
            public $timestamps = false;

            protected $fillable = [
                'MonLevel', 'DropProb', 'GoldMin', 'GoldMax'
            ];

            protected $casts = [
                'MonLevel' => 'integer',
        'DropProb' => 'float',
        'GoldMin' => 'integer',
        'GoldMax' => 'integer',
    ];
        }