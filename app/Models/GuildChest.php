<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuildChest extends Model
{
    public $timestamps = false;
    protected $table = '_GuildChest';
    protected $fillable = [
        'GuildID', 'Slot', 'ItemID'
    ];

    protected $casts = [
        'GuildID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
}
