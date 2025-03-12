        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Paymentwall extends Model
        {
            protected $table = '_paymentwall';
            public $timestamps = false;

            protected $fillable = [
                'JID', 'credits', 'date'
            ];

            protected $casts = [
                'JID' => 'integer',
        'credits' => 'integer',
        'date' => 'datetime',
    ];
        }