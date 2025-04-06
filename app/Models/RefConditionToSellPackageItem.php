<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefConditionToSellPackageItem newModelQuery()
 * @method static Builder<static>|RefConditionToSellPackageItem newQuery()
 * @method static Builder<static>|RefConditionToSellPackageItem query()
 * @mixin Eloquent
 */
class RefConditionToSellPackageItem extends Model
{
    public $timestamps = false;
    protected $table = '_RefConditionToSellPackageItem';
    protected $fillable = [
        'Service', 'Country', 'RefPackageItemCodeName', 'AcceptOrReject', 'FourCC', 'Param1', 'Param1_Desc128', 'Param2', 'Param2_Desc128', 'Param3', 'Param3_Desc128', 'Param4', 'Param4_Desc128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
        'AcceptOrReject' => 'integer',
        'FourCC' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
    ];
    protected $connection = 'proxy';
}
