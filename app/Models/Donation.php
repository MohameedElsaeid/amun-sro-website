        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Donation extends Model
        {
            protected $table = '_Donation';
            public $timestamps = false;

            protected $fillable = [
                'TransactionID', 'OfferID', 'TransactionSignature', 'TransactionType', 'UserJID', 'Username', 'Silk', 'Total', 'Date'
            ];

            protected $casts = [
                'OfferID' => 'integer',
        'UserJID' => 'integer',
        'Silk' => 'integer',
        'Total' => 'integer',
        'Date' => 'datetime',
    ];
        }