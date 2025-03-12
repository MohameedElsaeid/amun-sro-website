        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RegionName extends Model
        {
            protected $table = '_RegionNames';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'RegionID', 'TownName', 'SafeZone', 'TownNumber'
            ];

            protected $casts = [
                'ID' => 'integer',
        'RegionID' => 'integer',
        'TownNumber' => 'integer',
    ];
        }