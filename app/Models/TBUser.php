<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
