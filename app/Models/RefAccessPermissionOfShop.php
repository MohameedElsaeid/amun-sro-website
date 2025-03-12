        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefAccessPermissionOfShop extends Model
        {
            protected $table = '_RefAccessPermissionOfShop';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'Country', 'RefShopCodeName', 'AcceptOrReject', 'FourCC', 'Param1', 'Param1_Desc128', 'Param2', 'Param2_Desc128', 'Param3', 'Param3_Desc128', 'Param4', 'Param4_Desc128'
            ];

            protected $casts = [
                'Service' => 'integer',
        'Country' => 'integer',
        'AcceptOrReject' => 'integer',
        'FourCC' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
    ];
        }