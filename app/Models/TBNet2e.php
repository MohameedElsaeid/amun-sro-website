<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBNet2e extends Model
{
    public $timestamps = false;
    protected $table = 'TB_Net2e';
    protected $fillable = [
        'JID', 'StrUserID', 'password', 'SecondPassword', 'question', 'answer', 'Status', 'GMrank', 'Name', 'MDK', 'Email', 'sex', 'certificate_num', 'address', 'postcode', 'phone', 'mobile', 'cid', 'cidType', 'regtime', 'reg_ip', 'Time_log', 'freetime', 'sec_primary', 'sec_content', 'Birthday', 'Province', 'District', 'WherePlay', 'WhereKnow', 'Reference', 'Games', 'strLevel', 'Class', 'HowPlay', 'Inviter', 'Sec_act', 'LastModification'
    ];

    protected $casts = [
        'JID' => 'integer',
        'Status' => 'integer',
        'GMrank' => 'integer',
        'cidType' => 'integer',
        'regtime' => 'datetime',
        'Time_log' => 'datetime',
        'freetime' => 'integer',
        'sec_primary' => 'integer',
        'sec_content' => 'integer',
        'Birthday' => 'datetime',
        'HowPlay' => 'integer',
        'LastModification' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
