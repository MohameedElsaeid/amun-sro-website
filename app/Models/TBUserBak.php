<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBUserBak extends Model
{
    public $timestamps = false;
    protected $table = 'TB_User_Bak';
    protected $fillable = [
        'JID', 'StrUserID', 'password', 'question', 'answer', 'Status', 'GMrank', 'Name', 'Email', 'sex', 'certificate_num', 'address', 'postcode', 'phone', 'mobile', 'cid', 'regtime', 'reg_ip', 'Time_log', 'freetime', 'sec_primary', 'sec_content', 'Birthday', 'Province', 'District', 'WherePlay', 'WhereKnow', 'Reference', 'Games', 'strLevel', 'Class', 'HowPlay', 'AccPlayTime', 'LatestUpdateTime_ToPlayTime'
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
        'Birthday' => 'datetime',
        'HowPlay' => 'integer',
        'AccPlayTime' => 'integer',
        'LatestUpdateTime_ToPlayTime' => 'integer',
    ];
}
