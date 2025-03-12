<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefMappingShopWithTab extends Model
{
    public $timestamps = false;
    protected $table = '_RefMappingShopWithTab';
    protected $fillable = [
        'Service', 'Country', 'RefShopCodeName', 'RefTabGroupCodeName'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
    ];
}
