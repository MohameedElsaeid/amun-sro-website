        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefShopGroup extends Model
        {
            protected $table = '_RefShopGroup';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'Country', 'ID', 'CodeName128', 'RefNPCCodeName', 'Param1', 'Param1_Desc128', 'Param2', 'Param2_Desc128', 'Param3', 'Param3_Desc128', 'Param4', 'Param4_Desc128'
            ];

            protected $casts = [
                'Service' => 'integer',
        'Country' => 'integer',
        'ID' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
    ];
        }