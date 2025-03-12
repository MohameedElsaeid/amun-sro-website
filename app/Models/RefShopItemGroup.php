<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefShopItemGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefShopItemGroup';
    protected $fillable = [
        'Service', 'GroupID', 'CodeName128', 'StrID128_Group'
    ];

    protected $casts = [
        'Service' => 'integer',
        'GroupID' => 'integer',
    ];
}
