<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeDungeon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeDungeon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeDungeon query()
 * @mixin \Eloquent
 */
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
