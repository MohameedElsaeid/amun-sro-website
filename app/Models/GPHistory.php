<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GPHistory extends Model
{
    public $timestamps = false;
    protected $table = '_GPHistory';
    protected $fillable = [
        'ID', 'GuildID', 'UsedTime', 'CharName', 'UsedGP', 'Reason'
    ];

    protected $casts = [
        'ID' => 'integer',
        'GuildID' => 'integer',
        'UsedTime' => 'datetime',
        'UsedGP' => 'integer',
        'Reason' => 'integer',
    ];
}
