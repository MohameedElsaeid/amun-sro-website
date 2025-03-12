        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSiegeBlessBuff extends Model
        {
            protected $table = '_RefSiegeBlessBuff';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'BlessID', 'FortressID', 'RefBlessBuffID', 'NeedGold', 'NeedGP'
            ];

            protected $casts = [
                'Service' => 'integer',
        'BlessID' => 'integer',
        'FortressID' => 'integer',
        'RefBlessBuffID' => 'integer',
        'NeedGold' => 'integer',
        'NeedGP' => 'integer',
    ];
        }