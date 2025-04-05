<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Char newModelQuery()
 * @method static Builder<static>|Char newQuery()
 * @method static Builder<static>|Char query()
 * @mixin Eloquent
 */
class Char extends Model
{
    public $timestamps = false;
    protected $connection = 'shard';
    protected $table = 'dbo._Char';
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
    protected $primaryKey = 'CharID';

    public function getGuildMemberUser()
    {
        return $this->hasOne(GuildMember::class, 'CharID', 'CharID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getGuildUser()
    {
        $query = $this->hasOne(Guild::class, 'ID', 'GuildID');
        $query->where('ID', '!=', 0);
        return $query;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getInventoryUser()
    {
        return $this->hasMany(Inventory::class, 'CharID', 'CharID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function getInventoryItemUser()
    {
        $query = $this->belongsToMany(Items::class, Inventory::class, 'CharID', 'ItemID', '', 'ID64');
        $query->whereNotBetween('_Inventory.Slot', [0, 12])
            ->where('ItemID', '!=', 0);
        return $query;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function getEquipmentUser()
    {
        $query = $this->belongsToMany(Items::class, Inventory::class, 'CharID', 'ItemID', '', 'ID64');
        $query->select('*')
            ->whereBetween('_Inventory.Slot', [0, 12])
            ->where('_Items.RefItemID', '!=', 2)
            ->orderBy('_Inventory.Slot', 'ASC');
        return $query;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getAvatarInventoryUser()
    {
        return $this->hasMany(InventoryForAvatar::class, 'CharID', 'CharID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function getAvatarInventoryItemUser()
    {
        $query = $this->belongsToMany(Items::class, InventoryForAvatar::class, 'CharID', 'ItemID', '', 'ID64');
        $query->where('ItemID', '!=', 0);
        return $query;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getCharOnlineOffline()
    {
        return $this->belongsTo(OnlineOfflineLog::class, 'CharID', 'CharID');
    }

    /**
     * Getting values when Char is logged in
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getCharOnlineOfflineLoggedIn()
    {
        $q = $this->belongsTo(OnlineOfflineLog::class, 'CharID', 'CharID');
        $q->where('status', OnlineOfflineLog::STATUS_LOGGED_IN);
        return $q;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getAccountUser()
    {
        return $this->belongsTo(User::class, 'CharID', 'CharID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function getJobbingState()
    {
        $query = $this->belongsToMany(Items::class, Inventory::class, 'CharID', 'ItemID', '', 'ID64');
        $query->select(['ID64'])
            ->where('_Inventory.Slot', 8)
            ->where('_Items.RefItemID', '!=', 2);
        return $query;
    }
}
