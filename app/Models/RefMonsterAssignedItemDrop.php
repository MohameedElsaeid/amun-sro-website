<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMonsterAssignedItemDrop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMonsterAssignedItemDrop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMonsterAssignedItemDrop query()
 * @mixin \Eloquent
 */
class RefMonsterAssignedItemDrop extends Model
{
    public $timestamps = false;
    protected $table = '_RefMonster_AssignedItemDrop';
    protected $fillable = [
        'RefMonsterID', 'RefItemID', 'DropGroupType', 'OptLevel', 'DropAmountMin', 'DropAmountMax', 'DropRatio', 'RefMagicOptionID1', 'CustomValue1', 'RefMagicOptionID2', 'CustomValue2', 'RefMagicOptionID3', 'CustomValue3', 'RefMagicOptionID4', 'CustomValue4', 'RefMagicOptionID5', 'CustomValue5', 'RefMagicOptionID6', 'CustomValue6', 'RefMagicOptionID7', 'CustomValue7', 'RefMagicOptionID8', 'CustomValue8', 'RefMagicOptionID9', 'CustomValue9', 'RentCodeName'
    ];

    protected $casts = [
        'RefMonsterID' => 'integer',
        'RefItemID' => 'integer',
        'DropGroupType' => 'integer',
        'OptLevel' => 'integer',
        'DropAmountMin' => 'integer',
        'DropAmountMax' => 'integer',
        'DropRatio' => 'float',
        'RefMagicOptionID1' => 'integer',
        'CustomValue1' => 'integer',
        'RefMagicOptionID2' => 'integer',
        'CustomValue2' => 'integer',
        'RefMagicOptionID3' => 'integer',
        'CustomValue3' => 'integer',
        'RefMagicOptionID4' => 'integer',
        'CustomValue4' => 'integer',
        'RefMagicOptionID5' => 'integer',
        'CustomValue5' => 'integer',
        'RefMagicOptionID6' => 'integer',
        'CustomValue6' => 'integer',
        'RefMagicOptionID7' => 'integer',
        'CustomValue7' => 'integer',
        'RefMagicOptionID8' => 'integer',
        'CustomValue8' => 'integer',
        'RefMagicOptionID9' => 'integer',
        'CustomValue9' => 'integer',
    ];
}
