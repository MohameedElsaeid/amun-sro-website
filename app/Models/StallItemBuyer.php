<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|StallItemBuyer newModelQuery()
 * @method static Builder<static>|StallItemBuyer newQuery()
 * @method static Builder<static>|StallItemBuyer query()
 * @mixin Eloquent
 */
class StallItemBuyer extends Model
{
    public $timestamps = false;
    protected $table = 'StallItemBuyers';
    protected $fillable = [
        'ID', 'BuyerName', 'StallSlot', 'Date'
    ];

    protected $casts = [
        'ID' => 'integer',
        'StallSlot' => 'integer',
    ];
    protected $connection = 'event';
}
