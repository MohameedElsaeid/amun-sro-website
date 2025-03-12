<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TbPartnerInfo extends Model
{
    public $timestamps = false;
    protected $table = 'tb_partnerInfo';
    protected $fillable = [
        'partnerID', 'partnerName', 'partnerPass', 'balance', 'udate'
    ];

    protected $casts = [
        'balance' => 'integer',
        'udate' => 'datetime',
    ];
}
