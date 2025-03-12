<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefConditionToBuyScrapItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefConditionToBuyScrapItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefConditionToBuyScrapItem query()
 * @mixin \Eloquent
 */
class RefConditionToBuyScrapItem extends Model
{
    public $timestamps = false;
    protected $table = '_RefConditionToBuyScrapItem';
    protected $fillable = [
        'Service', 'Country', 'Cash', 'TypeID1', 'TypeID2', 'TypeID3', 'TypeID4', 'RefItemCodeName', 'AcceptOrReject', 'FourCC', 'Param1', 'Param1_Desc128', 'Param2', 'Param2_Desc128', 'Param3', 'Param3_Desc128', 'Param4', 'Param4_Desc128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
        'Cash' => 'integer',
        'TypeID1' => 'integer',
        'TypeID2' => 'integer',
        'TypeID3' => 'integer',
        'TypeID4' => 'integer',
        'AcceptOrReject' => 'integer',
        'FourCC' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
    ];
}
