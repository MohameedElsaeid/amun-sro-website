        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RoyalItemPoolAutoEquipment extends Model
        {
            protected $table = '_RoyalItemPoolAutoEquipment';
            public $timestamps = false;

            protected $fillable = [
                'service', 'ID', 'CodeName128', 'TypeID1', 'TypeID2', 'TypeID3', 'TypeID4', 'ReqLevel1', 'Gender', 'P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7', 'P8', 'P9', 'MagParamNum', 'Va', 'Race'
            ];

            protected $casts = [
                'service' => 'integer',
        'ID' => 'integer',
        'TypeID1' => 'integer',
        'TypeID2' => 'integer',
        'TypeID3' => 'integer',
        'TypeID4' => 'integer',
        'ReqLevel1' => 'integer',
        'Gender' => 'integer',
        'P1' => 'integer',
        'P2' => 'integer',
        'P3' => 'integer',
        'P4' => 'integer',
        'P5' => 'integer',
        'P6' => 'integer',
        'P7' => 'integer',
        'P8' => 'integer',
        'P9' => 'integer',
        'MagParamNum' => 'integer',
        'Va' => 'integer',
        'Race' => 'boolean',
    ];
        }