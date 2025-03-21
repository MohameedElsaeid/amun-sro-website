<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|InvCO newModelQuery()
 * @method static Builder<static>|InvCO newQuery()
 * @method static Builder<static>|InvCO query()
 * @mixin Eloquent
 */
class InvCO extends Model
{
    public $timestamps = false;
    protected $table = '_InvCOS';
    protected $fillable = [
        'COSID', 'Slot', 'ItemID'
    ];

    protected $casts = [
        'COSID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
    protected $connection = 'proxy';
}
