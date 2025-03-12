        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefScrapOfPackageItem extends Model
        {
            protected $table = '_RefScrapOfPackageItem';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'Country', 'RefPackageItemCodeName', 'RefItemCodeName', 'OptLevel', 'Variance', 'Data', 'MagParamNum', 'MagParam1', 'MagParam2', 'MagParam3', 'MagParam4', 'MagParam5', 'MagParam6', 'MagParam7', 'MagParam8', 'MagParam9', 'MagParam10', 'MagParam11', 'MagParam12', 'Param1', 'Param1_Desc128', 'Param2', 'Param2_Desc128', 'Param3', 'Param3_Desc128', 'Param4', 'Param4_Desc128', 'Index'
            ];

            protected $casts = [
                'Service' => 'integer',
        'Country' => 'integer',
        'OptLevel' => 'integer',
        'Variance' => 'integer',
        'Data' => 'integer',
        'MagParamNum' => 'integer',
        'MagParam1' => 'integer',
        'MagParam2' => 'integer',
        'MagParam3' => 'integer',
        'MagParam4' => 'integer',
        'MagParam5' => 'integer',
        'MagParam6' => 'integer',
        'MagParam7' => 'integer',
        'MagParam8' => 'integer',
        'MagParam9' => 'integer',
        'MagParam10' => 'integer',
        'MagParam11' => 'integer',
        'MagParam12' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
        'Index' => 'integer',
    ];
        }