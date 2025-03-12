        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefOptionalTeleport extends Model
        {
            protected $table = '_RefOptionalTeleport';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'ObjName128', 'ZoneName128', 'RegionID', 'Pos_X', 'Pos_Y', 'Pos_Z', 'WorldID', 'RegionIDGroup', 'MapPoint', 'LevelMin', 'LevelMax', 'Param1', 'Param1_Desc_128', 'Param2', 'Param2_Desc_128', 'Param3', 'Param3_Desc_128'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'RegionID' => 'integer',
        'Pos_X' => 'integer',
        'Pos_Y' => 'integer',
        'Pos_Z' => 'integer',
        'WorldID' => 'integer',
        'RegionIDGroup' => 'integer',
        'MapPoint' => 'integer',
        'LevelMin' => 'integer',
        'LevelMax' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
    ];
        }