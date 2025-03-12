        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class BOXRANDOM extends Model
        {
            protected $table = '_BOXRANDOM';
            public $timestamps = false;

            protected $fillable = [
                'GiftItems', 'SpecialItems', 'PremItems'
            ];

            protected $casts = [
            ];
        }