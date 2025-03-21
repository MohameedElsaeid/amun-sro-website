<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|PICKCommon newModelQuery()
 * @method static Builder<static>|PICKCommon newQuery()
 * @method static Builder<static>|PICKCommon query()
 * @mixin Eloquent
 */
class PICKCommon extends Model
{
    public $timestamps = false;
    protected $table = 'PICK_Common';
    protected $fillable = [
        'ID', 'GroupID', 'GroupCodeName', 'ItemCodeName', 'ItemCount', 'ItemPlus', 'Ratio'
    ];

    protected $casts = [
        'ID' => 'integer',
        'GroupID' => 'integer',
        'ItemCount' => 'integer',
        'ItemPlus' => 'integer',
        'Ratio' => 'float',
    ];
    protected $connection = 'log';
}
