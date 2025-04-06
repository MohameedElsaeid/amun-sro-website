<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSiegeDungeon newModelQuery()
 * @method static Builder<static>|RefSiegeDungeon newQuery()
 * @method static Builder<static>|RefSiegeDungeon query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
