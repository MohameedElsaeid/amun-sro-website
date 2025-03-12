<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiegeFortress extends Model
{
    public $timestamps = false;
    protected $table = '_SiegeFortress';
    protected $fillable = [
        'FortressID', 'GuildID', 'TaxRatio', 'Tax', 'NPCHired', 'TempGuildID', 'Introduction', 'CreatedDungeonTime', 'CreatedDungeonCount', 'IntroductionModificationPermission'
    ];

    protected $casts = [
        'FortressID' => 'integer',
        'GuildID' => 'integer',
        'TaxRatio' => 'integer',
        'Tax' => 'integer',
        'NPCHired' => 'integer',
        'TempGuildID' => 'integer',
        'CreatedDungeonTime' => 'datetime',
        'CreatedDungeonCount' => 'integer',
        'IntroductionModificationPermission' => 'integer',
    ];
}
