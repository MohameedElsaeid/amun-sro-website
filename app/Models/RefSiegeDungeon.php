<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefSiegeDungeon extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeDungeon';
    protected $fillable = [
        'Service', 'FortressID', 'WorldID', 'MaxCreateCount', 'EntryGold', 'EntryGP'
    ];

    protected $casts = [
        'Service' => 'integer',
        'FortressID' => 'integer',
        'WorldID' => 'integer',
        'MaxCreateCount' => 'integer',
        'EntryGold' => 'integer',
        'EntryGP' => 'integer',
    ];
}
