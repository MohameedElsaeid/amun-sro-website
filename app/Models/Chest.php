<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chest extends Model
{
    public $timestamps = false;
    protected $table = '_Chest';
    protected $fillable = [
        'UserJID', 'Slot', 'ItemID'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
}
