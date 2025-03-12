        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class BOXRANDOM1 extends Model
        {
            protected $table = '_BOXRANDOM1';
            public $timestamps = false;

            protected $fillable = [
                'GiftItems', 'SpecialItems', 'PremItems'
            ];

            protected $casts = [
            ];
        }