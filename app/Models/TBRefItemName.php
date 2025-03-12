        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TBRefItemName extends Model
        {
            protected $table = 'TB_Ref_ItemName';
            public $timestamps = false;

            protected $fillable = [
                'ITEM_ID', 'ITEM_SILK', 'ITEM_NAME', 'ITEM_NAME_UK'
            ];

            protected $casts = [
                'ITEM_ID' => 'float',
        'ITEM_SILK' => 'float',
    ];
        }