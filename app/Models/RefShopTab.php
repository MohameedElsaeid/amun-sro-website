        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefShopTab extends Model
        {
            protected $table = '_RefShopTab';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'Country', 'ID', 'CodeName128', 'RefTabGroupCodeName', 'StrID128_Tab'
            ];

            protected $casts = [
                'Service' => 'integer',
        'Country' => 'integer',
        'ID' => 'integer',
    ];
        }