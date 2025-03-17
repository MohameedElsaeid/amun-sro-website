<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopGroup query()
 * @mixin \Eloquent
 */
class RefShopGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefShopGroup';
    protected $fillable = [
        'Service', 'Country', 'ID', 'CodeName128', 'RefNPCCodeName', 'Param1', 'Param1_Desc128', 'Param2', 'Param2_Desc128', 'Param3', 'Param3_Desc128', 'Param4', 'Param4_Desc128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
        'ID' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
    ];
    protected $connection = 'proxy';
}
