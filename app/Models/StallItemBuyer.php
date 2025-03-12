<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StallItemBuyer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StallItemBuyer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StallItemBuyer query()
 * @mixin \Eloquent
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
}
