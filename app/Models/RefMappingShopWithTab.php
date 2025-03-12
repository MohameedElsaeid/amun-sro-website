        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefMappingShopWithTab extends Model
        {
            protected $table = '_RefMappingShopWithTab';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'Country', 'RefShopCodeName', 'RefTabGroupCodeName'
            ];

            protected $casts = [
                'Service' => 'integer',
        'Country' => 'integer',
    ];
        }