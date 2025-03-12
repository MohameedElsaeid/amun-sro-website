<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockedWhisperer extends Model
{
    public $timestamps = false;
    protected $table = '_BlockedWhisperers';
    protected $fillable = [
        'OwnerID', 'TargetName'
    ];

    protected $casts = [
        'OwnerID' => 'integer',
    ];
}
