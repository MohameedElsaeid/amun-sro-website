<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Eloquent;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 *
 *
 * @method static Builder<static>|User newModelQuery()
 * @method static Builder<static>|User newQuery()
 * @method static Builder<static>|User query()
 * @mixin Eloquent
 */
class User extends Authenticatable
{
    public $timestamps = false;
    protected $connection = 'sqlsrv';
    protected $table = 'dbo.TB_User';
    protected $primaryKey = 'JID';
    protected $fillable = [
        'last_login_bonus',
        'JID',
        'StrUserID',
        'password',
        'referral_code',
        'referred_by',
        'Status',
        'GMrank',
        'Name',
        'Email',
        'sex',
        'certificate_num',
        'address',
        'postcode',
        'phone',
        'country_code',
        'mobile',
        'regtime',
        'reg_ip',
        'Time_log',
        'freetime',
        'sec_primary',
        'sec_content',
        'AccPlayTime',
        'LatestUpdateTime_ToPlayTime',
        'Play123Time',
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'CharID' => 'integer',
        'last_login_bonus' => 'date',
    ];

    /**
     * Get the password for the user.
     * This should return the MD5 hash stored in the database
     *
     * @return string
     */
    public function getAuthPassword(): string
    {
        return $this->password;
    }

    public function referrals(): \Illuminate\Database\Eloquent\Builder|User|HasMany
    {
        return $this->hasMany(User::class, 'referred_by');
    }

    public function referrer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'referred_by');
    }
}
