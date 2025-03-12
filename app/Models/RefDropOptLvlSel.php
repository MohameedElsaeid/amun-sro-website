<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefDropOptLvlSel extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropOptLvlSel';
    protected $fillable = [
        'OptLevel', 'Prob', 'ReqOnlineTime'
    ];

    protected $casts = [
        'OptLevel' => 'integer',
        'Prob' => 'float',
        'ReqOnlineTime' => 'integer',
    ];
}
