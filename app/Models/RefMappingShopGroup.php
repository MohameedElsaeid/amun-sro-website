<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefMappingShopGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefMappingShopGroup';
    protected $fillable = [
        'Service', 'Country', 'RefShopGroupCodeName', 'RefShopCodeName'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
    ];
}
