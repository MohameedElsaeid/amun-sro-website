<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;


class TbUser extends Authenticatable
{
    protected $fillable = [
        'JID', 'StrUserID', 'password', 'Status', 'GMrank', 'Name', 'Email', 'sex', 'certificate_num', 'address', 'postcode', 'phone', 'mobile', 'regtime', 'reg_ip', 'Time_log', 'freetime', 'sec_primary', 'sec_content', 'AccPlayTime', 'LatestUpdateTime_ToPlayTime', 'Play123Time'
    ];
    protected $table = 'dbo.TB_User';
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
    protected $primaryKey = 'JID';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getSkSilk()
    {
        return $this->belongsTo(SkSilk::class, 'JID', 'JID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getSkSilkHistory()
    {
        return $this->hasMany(SkSilkBuyList::class, 'UserJID', 'JID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function getShardUser()
    {
        return $this->belongsToMany(Char::class, '_User', 'UserJID', 'CharID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getPunishmentUser()
    {
        $query = $this->hasMany(Punishment::class, 'UserJID', 'JID');
        $query->where('BlockEndTime', '>', Carbon::now()->format('Y-m-d H:i:s'));
        return $query;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getIsBlockedUser()
    {
        $query = $this->hasMany(BlockedUser::class, 'UserJID', 'JID');
        $query->where('timeEnd', '>', Carbon::now()->format('Y-m-d H:i:s'))->first();
        return $query;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getChestUser()
    {
        $query = $this->hasMany(Chest::class, 'UserJID', 'JID');
        $query->where('ItemID', '!=', 0);
        return $query;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function getChestItemUser()
    {
        $query = $this->belongsToMany(Items::class, Chest::class, 'UserJID', 'ItemID', '', 'ID64');
        $query->where('ItemID', '!=', 0);
        return $query;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getWebUser()
    {
        return $this->hasOne(User::class, 'jid', 'JID');
    }



}