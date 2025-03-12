        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class UserBalanceNhat extends Model
        {
            protected $table = '_UserBalance_Nhat';
            public $timestamps = false;

            protected $fillable = [
                'JID', 'Balance'
            ];

            protected $casts = [
                'JID' => 'integer',
        'Balance' => 'float',
    ];
        }