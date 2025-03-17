<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefAlchemyMerit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefAlchemyMerit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefAlchemyMerit query()
 * @mixin \Eloquent
 */
class RefAlchemyMerit extends Model
{
    public $timestamps = false;
    protected $table = '_RefAlchemyMerit';
    protected $fillable = [
        'Service', 'Group', 'OptName128', 'Level', 'Weapon', 'Armor', 'Accessory', 'Shield', 'FreeParam1', 'FreeParamDesc1', 'FreeParam2', 'FreeParamDesc2', 'FreeParam3', 'FreeParamDesc3'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Group' => 'integer',
        'Level' => 'integer',
        'Weapon' => 'float',
        'Armor' => 'float',
        'Accessory' => 'float',
        'Shield' => 'float',
        'FreeParam1' => 'integer',
        'FreeParam2' => 'integer',
        'FreeParam3' => 'integer',
    ];
    protected $connection = 'proxy';
}
