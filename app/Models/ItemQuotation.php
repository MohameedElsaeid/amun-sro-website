        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ItemQuotation extends Model
        {
            protected $table = '_ItemQuotation';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'Service', 'AssocNPC', 'RefItemID', 'BaseQuot', 'Quot_LB', 'Quot_UB', 'BaseStockAmount', 'FluctuateAmount', 'CurStockAmount'
            ];

            protected $casts = [
                'ID' => 'integer',
        'Service' => 'integer',
        'AssocNPC' => 'integer',
        'RefItemID' => 'integer',
        'BaseQuot' => 'float',
        'Quot_LB' => 'float',
        'Quot_UB' => 'float',
        'BaseStockAmount' => 'integer',
        'FluctuateAmount' => 'integer',
        'CurStockAmount' => 'integer',
    ];
        }