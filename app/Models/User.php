<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Eloquent;
use Illuminate\Contracts\Database\Eloquent\Builder;
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
    protected $primaryKey ='JID';
    protected $fillable = [
        'JID',
        'StrUserID',
        'password',
        'Status',
        'GMrank',
        'Name',
        'Email',
        'sex',
        'certificate_num',
        'address',
        'postcode',
        'phone',
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
}
