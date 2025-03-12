        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Chest extends Model
        {
            protected $table = '_Chest';
            public $timestamps = false;

            protected $fillable = [
                'UserJID', 'Slot', 'ItemID'
            ];

            protected $casts = [
                'UserJID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
        }