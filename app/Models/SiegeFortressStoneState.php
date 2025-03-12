<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiegeFortressStoneState extends Model
{
    public $timestamps = false;
    protected $table = '_SiegeFortressStoneState';
    protected $fillable = [
        'FortressID', 'GuildID', 'AccumulateDamage'
    ];

    protected $casts = [
        'FortressID' => 'integer',
        'GuildID' => 'integer',
        'AccumulateDamage' => 'integer',
    ];
}
