<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefRegionBindAssocServerBak extends Model
{
    public $timestamps = false;
    protected $table = '_RefRegionBindAssocServer_bak';
    protected $fillable = [
        'AreaName', 'AssocServer'
    ];

    protected $casts = [
        'AssocServer' => 'integer',
    ];
}
