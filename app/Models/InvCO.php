        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class InvCO extends Model
        {
            protected $table = '_InvCOS';
            public $timestamps = false;

            protected $fillable = [
                'COSID', 'Slot', 'ItemID'
            ];

            protected $casts = [
                'COSID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
        }