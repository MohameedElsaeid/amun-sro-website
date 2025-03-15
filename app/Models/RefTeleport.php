<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTeleport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTeleport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTeleport query()
 * @mixin \Eloquent
 */
class RefTeleport extends Model
{
    public $timestamps = false;
    protected $table = '_RefTeleport';
    protected $fillable = [
        'Service', 'ID', 'CodeName128', 'AssocRefObjCodeName128', 'AssocRefObjID', 'ZoneName128', 'GenRegionID', 'GenPos_X', 'GenPos_Y', 'GenPos_Z', 'GenAreaRadius', 'CanBeResurrectPos', 'CanGotoResurrectPos', 'GenWorldID', 'BindInteractionMask', 'FixedService'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'AssocRefObjID' => 'integer',
        'GenRegionID' => 'integer',
        'GenPos_X' => 'integer',
        'GenPos_Y' => 'integer',
        'GenPos_Z' => 'integer',
        'GenAreaRadius' => 'integer',
        'CanBeResurrectPos' => 'integer',
        'CanGotoResurrectPos' => 'integer',
        'GenWorldID' => 'integer',
        'BindInteractionMask' => 'integer',
        'FixedService' => 'integer',
    ];
    protected $connection = 'proxy';
}
