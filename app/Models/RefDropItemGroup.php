        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefDropItemGroup extends Model
        {
            protected $table = '_RefDropItemGroup';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'RefItemGroupID', 'CodeName128', 'RefItemID', 'SelectRatio', 'RefMagicGroupID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'RefItemGroupID' => 'integer',
        'RefItemID' => 'integer',
        'SelectRatio' => 'float',
        'RefMagicGroupID' => 'integer',
    ];
        }