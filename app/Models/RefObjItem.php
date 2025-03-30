<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefObjItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefObjItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefObjItem query()
 * @mixin \Eloquent
 */
class RefObjItem extends Model
{
    public $timestamps = false;
    protected $table = '_RefObjItem';
    protected $fillable = [
        'ID', 'MaxStack', 'ReqGender', 'ReqStr', 'ReqInt', 'ItemClass', 'SetID', 'Dur_L', 'Dur_U', 'PD_L', 'PD_U', 'PDInc', 'ER_L', 'ER_U', 'ERInc', 'PAR_L', 'PAR_U', 'PARInc', 'BR_L', 'BR_U', 'MD_L', 'MD_U', 'MDInc', 'MAR_L', 'MAR_U', 'MARInc', 'PDStr_L', 'PDStr_U', 'MDInt_L', 'MDInt_U', 'Quivered', 'Ammo1_TID4', 'Ammo2_TID4', 'Ammo3_TID4', 'Ammo4_TID4', 'Ammo5_TID4', 'SpeedClass', 'TwoHanded', 'Range', 'PAttackMin_L', 'PAttackMin_U', 'PAttackMax_L', 'PAttackMax_U', 'PAttackInc', 'MAttackMin_L', 'MAttackMin_U', 'MAttackMax_L', 'MAttackMax_U', 'MAttackInc', 'PAStrMin_L', 'PAStrMin_U', 'PAStrMax_L', 'PAStrMax_U', 'MAInt_Min_L', 'MAInt_Min_U', 'MAInt_Max_L', 'MAInt_Max_U', 'HR_L', 'HR_U', 'HRInc', 'CHR_L', 'CHR_U', 'Param1', 'Desc1_128', 'Param2', 'Desc2_128', 'Param3', 'Desc3_128', 'Param4', 'Desc4_128', 'Param5', 'Desc5_128', 'Param6', 'Desc6_128', 'Param7', 'Desc7_128', 'Param8', 'Desc8_128', 'Param9', 'Desc9_128', 'Param10', 'Desc10_128', 'Param11', 'Desc11_128', 'Param12', 'Desc12_128', 'Param13', 'Desc13_128', 'Param14', 'Desc14_128', 'Param15', 'Desc15_128', 'Param16', 'Desc16_128', 'Param17', 'Desc17_128', 'Param18', 'Desc18_128', 'Param19', 'Desc19_128', 'Param20', 'Desc20_128', 'MaxMagicOptCount', 'ChildItemCount', 'Link'
    ];

    protected $casts = [
        'ID' => 'integer',
        'MaxStack' => 'integer',
        'ReqGender' => 'integer',
        'ReqStr' => 'integer',
        'ReqInt' => 'integer',
        'ItemClass' => 'integer',
        'SetID' => 'integer',
        'Dur_L' => 'float',
        'Dur_U' => 'float',
        'PD_L' => 'float',
        'PD_U' => 'float',
        'PDInc' => 'float',
        'ER_L' => 'float',
        'ER_U' => 'float',
        'ERInc' => 'float',
        'PAR_L' => 'float',
        'PAR_U' => 'float',
        'PARInc' => 'float',
        'BR_L' => 'float',
        'BR_U' => 'float',
        'MD_L' => 'float',
        'MD_U' => 'float',
        'MDInc' => 'float',
        'MAR_L' => 'float',
        'MAR_U' => 'float',
        'MARInc' => 'float',
        'PDStr_L' => 'float',
        'PDStr_U' => 'float',
        'MDInt_L' => 'float',
        'MDInt_U' => 'float',
        'Quivered' => 'integer',
        'Ammo1_TID4' => 'integer',
        'Ammo2_TID4' => 'integer',
        'Ammo3_TID4' => 'integer',
        'Ammo4_TID4' => 'integer',
        'Ammo5_TID4' => 'integer',
        'SpeedClass' => 'integer',
        'TwoHanded' => 'integer',
        'Range' => 'integer',
        'PAttackMin_L' => 'float',
        'PAttackMin_U' => 'float',
        'PAttackMax_L' => 'float',
        'PAttackMax_U' => 'float',
        'PAttackInc' => 'float',
        'MAttackMin_L' => 'float',
        'MAttackMin_U' => 'float',
        'MAttackMax_L' => 'float',
        'MAttackMax_U' => 'float',
        'MAttackInc' => 'float',
        'PAStrMin_L' => 'float',
        'PAStrMin_U' => 'float',
        'PAStrMax_L' => 'float',
        'PAStrMax_U' => 'float',
        'MAInt_Min_L' => 'float',
        'MAInt_Min_U' => 'float',
        'MAInt_Max_L' => 'float',
        'MAInt_Max_U' => 'float',
        'HR_L' => 'float',
        'HR_U' => 'float',
        'HRInc' => 'float',
        'CHR_L' => 'float',
        'CHR_U' => 'float',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
        'Param5' => 'integer',
        'Param6' => 'integer',
        'Param7' => 'integer',
        'Param8' => 'integer',
        'Param9' => 'integer',
        'Param10' => 'integer',
        'Param11' => 'integer',
        'Param12' => 'integer',
        'Param13' => 'integer',
        'Param14' => 'integer',
        'Param15' => 'integer',
        'Param16' => 'integer',
        'Param17' => 'integer',
        'Param18' => 'integer',
        'Param19' => 'integer',
        'Param20' => 'integer',
        'MaxMagicOptCount' => 'integer',
        'ChildItemCount' => 'integer',
        'Link' => 'integer',
    ];
    protected $connection = 'shard';
}
