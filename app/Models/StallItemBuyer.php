        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class StallItemBuyer extends Model
        {
            protected $table = 'StallItemBuyers';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'BuyerName', 'StallSlot', 'Date'
            ];

            protected $casts = [
                'ID' => 'integer',
        'StallSlot' => 'integer',
    ];
        }