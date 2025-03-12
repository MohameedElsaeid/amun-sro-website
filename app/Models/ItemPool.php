<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemPool extends Model
{
    public $timestamps = false;
    protected $table = '_ItemPool';
    protected $fillable = [
        'ItemID', 'InUse'
    ];

    protected $casts = [
        'ItemID' => 'integer',
        'InUse' => 'integer',
    ];
}
