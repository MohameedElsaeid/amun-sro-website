<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRentItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRentItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRentItem query()
 * @mixin \Eloquent
 */
class RefRentItem extends Model
{
    public $timestamps = false;
    protected $table = '_RefRentItem';
    protected $fillable = [
        'service', 'RentCodeName', 'RefItemID', 'CanDelete', 'CnaRecharge', 'RentType', 'StartTime', 'EndTime', 'TimeCnt', 'Time1', 'Time2', 'Time3', 'Time4', 'Time5'
    ];

    protected $casts = [
        'service' => 'integer',
        'RefItemID' => 'integer',
        'CanDelete' => 'integer',
        'CnaRecharge' => 'integer',
        'RentType' => 'integer',
        'StartTime' => 'datetime',
        'EndTime' => 'datetime',
        'TimeCnt' => 'integer',
        'Time1' => 'integer',
        'Time2' => 'integer',
        'Time3' => 'integer',
        'Time4' => 'integer',
        'Time5' => 'integer',
    ];
    protected $connection = 'proxy';
}
