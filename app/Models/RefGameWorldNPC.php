        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefGameWorldNPC extends Model
        {
            protected $table = '_RefGameWorldNPC';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'WorldCodeName128', 'NPCCodeName128', 'RegionID', 'PosX', 'PosY', 'PosZ', 'Param1', 'Param2', 'Param3', 'Param4', 'Param5', 'Param6', 'Param7', 'Param8', 'Param9', 'Param10'
            ];

            protected $casts = [
                'ID' => 'integer',
        'RegionID' => 'integer',
        'PosX' => 'integer',
        'PosY' => 'integer',
        'PosZ' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
        'Param5' => 'integer',
        'Param6' => 'integer',
        'Param7' => 'integer',
        'Param8' => 'integer',
        'Param9' => 'integer',
        'Param10' => 'integer',
    ];
        }