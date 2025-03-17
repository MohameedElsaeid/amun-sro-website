<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefObjChar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefObjChar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefObjChar query()
 * @mixin \Eloquent
 */
class RefObjChar extends Model
{
    public $timestamps = false;
    protected $table = '_RefObjChar';
    protected $fillable = [
        'ID', 'Lvl', 'CharGender', 'MaxHP', 'MaxMP', 'ResistFrozen', 'ResistFrostbite', 'ResistBurn', 'ResistEShock', 'ResistPoison', 'ResistZombie', 'ResistSleep', 'ResistRoot', 'ResistSlow', 'ResistFear', 'ResistMyopia', 'ResistBlood', 'ResistStone', 'ResistDark', 'ResistStun', 'ResistDisea', 'ResistChaos', 'ResistCsePD', 'ResistCseMD', 'ResistCseSTR', 'ResistCseINT', 'ResistCseHP', 'ResistCseMP', 'Resist24', 'ResistBomb', 'Resist26', 'Resist27', 'Resist28', 'Resist29', 'Resist30', 'Resist31', 'Resist32', 'InventorySize', 'CanStore_TID1', 'CanStore_TID2', 'CanStore_TID3', 'CanStore_TID4', 'CanBeVehicle', 'CanControl', 'DamagePortion', 'MaxPassenger', 'AssocTactics', 'PD', 'MD', 'PAR', 'MAR', 'ER', 'BR', 'HR', 'CHR', 'ExpToGive', 'CreepType', 'Knockdown', 'KO_RecoverTime', 'DefaultSkill_1', 'DefaultSkill_2', 'DefaultSkill_3', 'DefaultSkill_4', 'DefaultSkill_5', 'DefaultSkill_6', 'DefaultSkill_7', 'DefaultSkill_8', 'DefaultSkill_9', 'DefaultSkill_10', 'TextureType', 'Except_1', 'Except_2', 'Except_3', 'Except_4', 'Except_5', 'Except_6', 'Except_7', 'Except_8', 'Except_9', 'Except_10', 'Link'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Lvl' => 'integer',
        'CharGender' => 'integer',
        'MaxHP' => 'integer',
        'MaxMP' => 'integer',
        'ResistFrozen' => 'integer',
        'ResistFrostbite' => 'integer',
        'ResistBurn' => 'integer',
        'ResistEShock' => 'integer',
        'ResistPoison' => 'integer',
        'ResistZombie' => 'integer',
        'ResistSleep' => 'integer',
        'ResistRoot' => 'integer',
        'ResistSlow' => 'integer',
        'ResistFear' => 'integer',
        'ResistMyopia' => 'integer',
        'ResistBlood' => 'integer',
        'ResistStone' => 'integer',
        'ResistDark' => 'integer',
        'ResistStun' => 'integer',
        'ResistDisea' => 'integer',
        'ResistChaos' => 'integer',
        'ResistCsePD' => 'integer',
        'ResistCseMD' => 'integer',
        'ResistCseSTR' => 'integer',
        'ResistCseINT' => 'integer',
        'ResistCseHP' => 'integer',
        'ResistCseMP' => 'integer',
        'Resist24' => 'integer',
        'ResistBomb' => 'integer',
        'Resist26' => 'integer',
        'Resist27' => 'integer',
        'Resist28' => 'integer',
        'Resist29' => 'integer',
        'Resist30' => 'integer',
        'Resist31' => 'integer',
        'Resist32' => 'integer',
        'InventorySize' => 'integer',
        'CanStore_TID1' => 'integer',
        'CanStore_TID2' => 'integer',
        'CanStore_TID3' => 'integer',
        'CanStore_TID4' => 'integer',
        'CanBeVehicle' => 'integer',
        'CanControl' => 'integer',
        'DamagePortion' => 'integer',
        'MaxPassenger' => 'integer',
        'AssocTactics' => 'integer',
        'PD' => 'integer',
        'MD' => 'integer',
        'PAR' => 'integer',
        'MAR' => 'integer',
        'ER' => 'integer',
        'BR' => 'integer',
        'HR' => 'integer',
        'CHR' => 'integer',
        'ExpToGive' => 'integer',
        'CreepType' => 'integer',
        'Knockdown' => 'integer',
        'KO_RecoverTime' => 'integer',
        'DefaultSkill_1' => 'integer',
        'DefaultSkill_2' => 'integer',
        'DefaultSkill_3' => 'integer',
        'DefaultSkill_4' => 'integer',
        'DefaultSkill_5' => 'integer',
        'DefaultSkill_6' => 'integer',
        'DefaultSkill_7' => 'integer',
        'DefaultSkill_8' => 'integer',
        'DefaultSkill_9' => 'integer',
        'DefaultSkill_10' => 'integer',
        'TextureType' => 'integer',
        'Except_1' => 'integer',
        'Except_2' => 'integer',
        'Except_3' => 'integer',
        'Except_4' => 'integer',
        'Except_5' => 'integer',
        'Except_6' => 'integer',
        'Except_7' => 'integer',
        'Except_8' => 'integer',
        'Except_9' => 'integer',
        'Except_10' => 'integer',
        'Link' => 'integer',
    ];
    protected $connection = 'proxy';
}
