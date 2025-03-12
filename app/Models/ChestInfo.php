<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChestInfo extends Model
{
    public $timestamps = false;
    protected $table = '_ChestInfo';
    protected $fillable = [
        'JID', 'ChestSize'
    ];

    protected $casts = [
        'JID' => 'integer',
        'ChestSize' => 'integer',
    ];
}
