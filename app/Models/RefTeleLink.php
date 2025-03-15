<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTeleLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTeleLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTeleLink query()
 * @mixin \Eloquent
 */
class RefTeleLink extends Model
{
    public $timestamps = false;
    protected $table = '_RefTeleLink';
    protected $fillable = [
        'Service', 'OwnerTeleport', 'TargetTeleport', 'Fee', 'RestrictBindMethod', 'RunTimeTeleportMethod', 'CheckResult', 'Restrict1', 'Data1_1', 'Data1_2', 'Restrict2', 'Data2_1', 'Data2_2', 'Restrict3', 'Data3_1', 'Data3_2', 'Restrict4', 'Data4_1', 'Data4_2', 'Restrict5', 'Data5_1', 'Data5_2'
    ];

    protected $casts = [
        'Service' => 'integer',
        'OwnerTeleport' => 'integer',
        'TargetTeleport' => 'integer',
        'Fee' => 'integer',
        'RestrictBindMethod' => 'integer',
        'RunTimeTeleportMethod' => 'integer',
        'CheckResult' => 'integer',
        'Restrict1' => 'integer',
        'Data1_1' => 'integer',
        'Data1_2' => 'integer',
        'Restrict2' => 'integer',
        'Data2_1' => 'integer',
        'Data2_2' => 'integer',
        'Restrict3' => 'integer',
        'Data3_1' => 'integer',
        'Data3_2' => 'integer',
        'Restrict4' => 'integer',
        'Data4_1' => 'integer',
        'Data4_2' => 'integer',
        'Restrict5' => 'integer',
        'Data5_1' => 'integer',
        'Data5_2' => 'integer',
    ];
    protected $connection = 'proxy';
}
