        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class GuildChest extends Model
        {
            protected $table = '_GuildChest';
            public $timestamps = false;

            protected $fillable = [
                'GuildID', 'Slot', 'ItemID'
            ];

            protected $casts = [
                'GuildID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
        }