<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRewardPolicyToSellPackageItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRewardPolicyToSellPackageItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRewardPolicyToSellPackageItem query()
 * @mixin \Eloquent
 */
class RefRewardPolicyToSellPackageItem extends Model
{
    public $timestamps = false;
    protected $table = '_RefRewardPolicyToSellPackageItem';
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
}
