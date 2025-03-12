        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Paypal extends Model
        {
            protected $table = 'paypal';
            public $timestamps = false;

            protected $fillable = [
                'txn_id', 'payer_email', 'mc_gross', 'username', 'date'
            ];

            protected $casts = [
                'mc_gross' => 'float',
    ];
        }