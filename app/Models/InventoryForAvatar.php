        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class InventoryForAvatar extends Model
        {
            protected $table = '_InventoryForAvatar';
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