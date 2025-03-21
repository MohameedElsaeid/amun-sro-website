<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|ILegendTool newModelQuery()
 * @method static Builder<static>|ILegendTool newQuery()
 * @method static Builder<static>|ILegendTool query()
 * @mixin Eloquent
 */
class ILegendTool extends Model
{
    public $timestamps = false;
    protected $table = 'iLegend_Tool';
    protected $fillable = [
        'ID', 'Service', 'Type', 'Target', 'Message', 'RefMobID', 'RefItemID', 'Amount', 'OptLvl', 'RegionID', 'PosX', 'PosY', 'PosZ', 'WorldID', 'CapeColor', 'StallTitle', 'StallGreating', 'StallSlot', 'InvSlot', 'ItemCount', 'ItemPrice', 'Date'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Service' => 'integer',
    ];
    protected $connection = 'event';
}
