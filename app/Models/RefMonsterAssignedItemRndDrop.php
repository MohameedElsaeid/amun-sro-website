        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefMonsterAssignedItemRndDrop extends Model
        {
            protected $table = '_RefMonster_AssignedItemRndDrop';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'RefMonsterID', 'RefItemGroupID', 'ItemGroupCodeName128', 'Overlap', 'DropAmountMin', 'DropAmountMax', 'DropRatio', 'param1', 'param2'
            ];

            protected $casts = [
                'Service' => 'integer',
        'RefMonsterID' => 'integer',
        'RefItemGroupID' => 'integer',
        'Overlap' => 'integer',
        'DropAmountMin' => 'integer',
        'DropAmountMax' => 'integer',
        'DropRatio' => 'float',
        'param1' => 'integer',
        'param2' => 'integer',
    ];
        }