        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CustomPcLimit extends Model
        {
            protected $table = 'CustomPcLimit';
            public $timestamps = false;

            protected $fillable = [
                'RegionID', 'IPCount', 'HWIDCount'
            ];

            protected $casts = [
                'RegionID' => 'integer',
        'IPCount' => 'integer',
        'HWIDCount' => 'integer',
    ];
        }