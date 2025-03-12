        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefShopTabGroup extends Model
        {
            protected $table = '_RefShopTabGroup';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'Country', 'ID', 'CodeName128', 'StrID128_Group'
            ];

            protected $casts = [
                'Service' => 'integer',
        'Country' => 'integer',
        'ID' => 'integer',
    ];
        }