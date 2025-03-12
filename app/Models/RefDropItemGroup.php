<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefDropItemGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropItemGroup';
    protected $fillable = [
        'Service', 'RefItemGroupID', 'CodeName128', 'RefItemID', 'SelectRatio', 'RefMagicGroupID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'RefItemGroupID' => 'integer',
        'RefItemID' => 'integer',
        'SelectRatio' => 'float',
        'RefMagicGroupID' => 'integer',
    ];
}
