        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SKSilkChangeBYWeb extends Model
        {
            protected $table = 'SK_SilkChange_BY_Web';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'JID', 'silk_remain', 'silk_offset', 'silk_type', 'reason'
            ];

            protected $casts = [
                'ID' => 'integer',
        'JID' => 'integer',
        'silk_remain' => 'integer',
        'silk_offset' => 'integer',
        'silk_type' => 'integer',
        'reason' => 'integer',
    ];
        }