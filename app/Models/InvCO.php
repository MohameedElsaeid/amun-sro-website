<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvCO newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvCO newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InvCO query()
 * @mixin \Eloquent
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
