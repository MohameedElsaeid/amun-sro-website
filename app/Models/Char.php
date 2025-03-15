<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Char newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Char newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Char query()
 * @mixin \Eloquent
 */
class Char extends Model
{
    public $timestamps = false;
    protected $table = '_Char';
    protected $fillable = [
        'CharID', 'Deleted', 'RefObjID', 'CharName16', 'NickName16', 'Scale', 'CurLevel', 'MaxLevel', 'ExpOffset', 'SExpOffset', 'Strength', 'Intellect', 'RemainGold', 'RemainSkillPoint', 'RemainStatPoint', 'RemainHwanCount', 'GatheredExpPoint', 'HP', 'MP', 'LatestRegion', 'PosX', 'PosY', 'PosZ', 'AppointedTeleport', 'AutoInvestExp', 'InventorySize', 'DailyPK', 'TotalPK', 'PKPenaltyPoint', 'TPP', 'PenaltyForfeit', 'JobPenaltyTime', 'JobLvl_Trader', 'Trader_Exp', 'JobLvl_Hunter', 'Hunter_Exp', 'JobLvl_Robber', 'Robber_Exp', 'GuildID', 'LastLogout', 'TelRegion', 'TelPosX', 'TelPosY', 'TelPosZ', 'DiedRegion', 'DiedPosX', 'DiedPosY', 'DiedPosZ', 'WorldID', 'TelWorldID', 'DiedWorldID', 'HwanLevel', 'ItemPoints', 'PVPPoints', 'JOBPoints', 'Rarity', 'Support'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Deleted' => 'integer',
        'RefObjID' => 'integer',
        'Scale' => 'integer',
        'CurLevel' => 'integer',
        'MaxLevel' => 'integer',
        'ExpOffset' => 'integer',
        'SExpOffset' => 'integer',
        'Strength' => 'integer',
        'Intellect' => 'integer',
        'RemainGold' => 'integer',
        'RemainSkillPoint' => 'integer',
        'RemainStatPoint' => 'integer',
        'RemainHwanCount' => 'integer',
        'GatheredExpPoint' => 'integer',
        'HP' => 'integer',
        'MP' => 'integer',
        'LatestRegion' => 'integer',
        'PosX' => 'float',
        'PosY' => 'float',
        'PosZ' => 'float',
        'AppointedTeleport' => 'integer',
        'AutoInvestExp' => 'integer',
        'InventorySize' => 'integer',
        'DailyPK' => 'integer',
        'TotalPK' => 'integer',
        'PKPenaltyPoint' => 'integer',
        'TPP' => 'integer',
        'PenaltyForfeit' => 'integer',
        'JobPenaltyTime' => 'integer',
        'JobLvl_Trader' => 'integer',
        'Trader_Exp' => 'integer',
        'JobLvl_Hunter' => 'integer',
        'Hunter_Exp' => 'integer',
        'JobLvl_Robber' => 'integer',
        'Robber_Exp' => 'integer',
        'GuildID' => 'integer',
        'LastLogout' => 'datetime',
        'TelRegion' => 'integer',
        'TelPosX' => 'float',
        'TelPosY' => 'float',
        'TelPosZ' => 'float',
        'DiedRegion' => 'integer',
        'DiedPosX' => 'float',
        'DiedPosY' => 'float',
        'DiedPosZ' => 'float',
        'WorldID' => 'integer',
        'TelWorldID' => 'integer',
        'DiedWorldID' => 'integer',
        'HwanLevel' => 'integer',
        'ItemPoints' => 'integer',
        'PVPPoints' => 'integer',
        'JOBPoints' => 'integer',
        'Rarity' => 'integer',
        'Support' => 'integer',
    ];
    protected $connection = 'proxy';
}
