<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefMonsterAssignedItemRndDrop extends Model
{
    public $timestamps = false;
    protected $table = '_RefMonster_AssignedItemRndDrop';
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
