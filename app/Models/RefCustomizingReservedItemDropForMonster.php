<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefCustomizingReservedItemDropForMonster extends Model
{
    public $timestamps = false;
    protected $table = '_RefCustomizingReservedItemDropForMonster';
    protected $fillable = [
        'RefMonsterID', 'Rarity', 'Command', 'DropGroupType', 'Param1', 'Param2', 'Param3', 'Param4', 'Param5'
    ];

    protected $casts = [
        'RefMonsterID' => 'integer',
        'Rarity' => 'integer',
        'Command' => 'integer',
        'DropGroupType' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
        'Param5' => 'integer',
    ];
}
