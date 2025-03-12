<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefRegionBindAssocServer extends Model
{
    public $timestamps = false;
    protected $table = '_RefRegionBindAssocServer';
    protected $fillable = [
        'AreaName', 'AssocServer'
    ];

    protected $casts = [
        'AssocServer' => 'integer',
    ];
}
