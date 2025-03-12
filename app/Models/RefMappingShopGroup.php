        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefMappingShopGroup extends Model
        {
            protected $table = '_RefMappingShopGroup';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'Country', 'RefShopGroupCodeName', 'RefShopCodeName'
            ];

            protected $casts = [
                'Service' => 'integer',
        'Country' => 'integer',
    ];
        }