        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefInstanceWorldStartPo extends Model
        {
            protected $table = '_RefInstance_World_Start_Pos';
            public $timestamps = false;

            protected $fillable = [
                'WorldID', 'RegionID', 'PosX', 'PosY', 'PosZ', 'Param'
            ];

            protected $casts = [
                'WorldID' => 'integer',
        'RegionID' => 'integer',
        'PosX' => 'integer',
        'PosY' => 'integer',
        'PosZ' => 'integer',
        'Param' => 'integer',
    ];
        }