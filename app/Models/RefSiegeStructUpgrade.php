<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSiegeStructUpgrade newModelQuery()
 * @method static Builder<static>|RefSiegeStructUpgrade newQuery()
 * @method static Builder<static>|RefSiegeStructUpgrade query()
 * @mixin Eloquent
 */
class RefSiegeStructUpgrade extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeStructUpgrade';
    protected $fillable = [
        'Service', 'Structname', 'BaseStructcodename', 'UpgradeStructname1', 'UpgradeStructname2', 'UpgradeStructname3', 'UpgradeStructname4'
    ];

    protected $casts = [
        'Service' => 'integer',
    ];
    protected $connection = 'proxy';
}
