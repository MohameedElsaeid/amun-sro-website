<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKSilkGood extends Model
{
    public $timestamps = false;
    protected $table = 'SK_SilkGoods';
    protected $fillable = [
        'Service', 'ID', 'GoodsCode', 'GoodsName', 'SilkQuantity', 'PointQuantity', 'SilkPrice', 'Category', 'CPName', 'RegDate'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'SilkQuantity' => 'integer',
        'PointQuantity' => 'integer',
        'SilkPrice' => 'integer',
        'Category' => 'integer',
        'RegDate' => 'datetime',
    ];
}
