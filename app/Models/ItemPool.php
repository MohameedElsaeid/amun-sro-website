        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ItemPool extends Model
        {
            protected $table = '_ItemPool';
            public $timestamps = false;

            protected $fillable = [
                'ItemID', 'InUse'
            ];

            protected $casts = [
                'ItemID' => 'integer',
        'InUse' => 'integer',
    ];
        }