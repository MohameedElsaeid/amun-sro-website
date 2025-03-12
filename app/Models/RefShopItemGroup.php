        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefShopItemGroup extends Model
        {
            protected $table = '_RefShopItemGroup';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'GroupID', 'CodeName128', 'StrID128_Group'
            ];

            protected $casts = [
                'Service' => 'integer',
        'GroupID' => 'integer',
    ];
        }