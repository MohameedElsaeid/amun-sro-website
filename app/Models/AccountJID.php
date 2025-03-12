        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class AccountJID extends Model
        {
            protected $table = '_AccountJID';
            public $timestamps = false;

            protected $fillable = [
                'AccountID', 'JID', 'Gold'
            ];

            protected $casts = [
                'JID' => 'integer',
        'Gold' => 'integer',
    ];
        }