        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Inventory extends Model
        {
            protected $table = '_Inventory';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'Slot', 'ItemID'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
        }