<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TBUser extends Model
{
    public $timestamps = false;
    protected $table = 'TB_User';
    protected $fillable = [
        'JID', 'StrUserID', 'password', 'Status', 'GMrank', 'Name', 'Email', 'sex', 'certificate_num', 'address', 'postcode', 'phone', 'mobile', 'regtime', 'reg_ip', 'Time_log', 'freetime', 'sec_primary', 'sec_content', 'AccPlayTime', 'LatestUpdateTime_ToPlayTime', 'Play123Time'
    ];

    protected $casts = [
        'JID' => 'integer',
        'Status' => 'integer',
        'GMrank' => 'integer',
        'regtime' => 'datetime',
        'Time_log' => 'datetime',
        'freetime' => 'integer',
        'sec_primary' => 'integer',
        'sec_content' => 'integer',
        'AccPlayTime' => 'integer',
        'LatestUpdateTime_ToPlayTime' => 'integer',
        'Play123Time' => 'integer',
    ];
    protected $connection = 'sqlsrv';


    /**
     * @return BelongsTo
     */
    public function getSkSilk(): BelongsTo
    {
        return $this->belongsTo(SkSilk::class, 'JID', 'JID');
    }

    /**
     * @return HasMany
     */
    public function getSkSilkHistory(): HasMany
    {
        return $this->hasMany(SkSilkBuyList::class, 'UserJID', 'JID');
    }

    /**
     * @return belongsToMany
     */
    public function getShardUser(): BelongsToMany
    {
        return $this->belongsToMany(Char::class, '_User', 'UserJID', 'CharID');
    }

    /**
     * @return HasMany
     */
    public function getPunishmentUser(): HasMany
    {
        $query = $this->hasMany(Punishment::class, 'UserJID', 'JID');
        $query->where('BlockEndTime', '>', Carbon::now()->format('Y-m-d H:i:s'));
        return $query;
    }

    /**
     * @return HasMany
     */
    public function getIsBlockedUser(): HasMany
    {
        $query = $this->hasMany(BlockedUser::class, 'UserJID', 'JID');
        $query->where('timeEnd', '>', Carbon::now()->format('Y-m-d H:i:s'))->first();
        return $query;
    }

    /**
     * @return HasMany
     */
    public function getChestUser(): HasMany
    {
        $query = $this->hasMany(Chest::class, 'UserJID', 'JID');
        $query->where('ItemID', '!=', 0);
        return $query;
    }

    /**
     * @return BelongsToMany
     */
    public function getChestItemUser(): BelongsToMany
    {
        $query = $this->belongsToMany(Items::class, Chest::class, 'UserJID', 'ItemID', '', 'ID64');
        $query->where('ItemID', '!=', 0);
        return $query;
    }

}
