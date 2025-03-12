        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class InventoryForLinkedStorage extends Model
        {
            protected $table = '_InventoryForLinkedStorage';
            public $timestamps = false;

            protected $fillable = [
                'LinkedItemID', 'Slot', 'ItemID'
            ];

            protected $casts = [
                'LinkedItemID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
        }