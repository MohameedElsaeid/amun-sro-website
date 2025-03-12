<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TbPaygateTran extends Model
{
    public $timestamps = false;
    protected $table = 'tb_paygate_trans';
    protected $fillable = [
        'trans_ID', 'trans_date', 'trans_type', 'bank_id', 'account_id', 'order_no', 'moneyValue', 'beforeMoney', 'afterMoney', 'PG_TransID'
    ];

    protected $casts = [
        'trans_ID' => 'integer',
        'trans_date' => 'datetime',
        'moneyValue' => 'integer',
        'beforeMoney' => 'integer',
        'afterMoney' => 'integer',
        'PG_TransID' => 'integer',
    ];
}
