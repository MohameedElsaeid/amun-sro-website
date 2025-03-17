<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKItemSaleLog extends Model
{
    public $timestamps = false;
    protected $table = 'SK_ItemSaleLog';
    protected $fillable = [
        'ID', 'JID', 'ShardID', 'CharID', 'ItemID', 'Silk_Own', 'Silk_Gift', 'Silk_Point', 'IP', 'RegDate'
    ];

    protected $casts = [
        'ID' => 'integer',
        'JID' => 'integer',
        'ShardID' => 'integer',
        'CharID' => 'integer',
        'ItemID' => 'integer',
        'Silk_Own' => 'integer',
        'Silk_Gift' => 'integer',
        'Silk_Point' => 'integer',
        'IP' => 'integer',
        'RegDate' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
