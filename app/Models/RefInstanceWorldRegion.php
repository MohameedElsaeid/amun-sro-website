        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefInstanceWorldRegion extends Model
        {
            protected $table = '_RefInstance_World_Region';
            public $timestamps = false;

            protected $fillable = [
                'WorldID', 'RegionID'
            ];

            protected $casts = [
                'WorldID' => 'integer',
        'RegionID' => 'integer',
    ];
        }