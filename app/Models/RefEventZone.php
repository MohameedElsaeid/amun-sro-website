<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefEventZone newModelQuery()
 * @method static Builder<static>|RefEventZone newQuery()
 * @method static Builder<static>|RefEventZone query()
 * @mixin Eloquent
 */
class RefEventZone extends Model
{
    public $timestamps = false;
    protected $table = '_RefEventZone';
    protected $fillable = [
        'Service', 'ID', 'ZoneName', 'EventName', 'Param1', 'Param2', 'Param3', 'Param4', 'Param5', 'strParam1', 'strParam2', 'strParam3', 'strParam4', 'strParam5'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
        'Param5' => 'integer',
    ];
    protected $connection = 'proxy';
}
