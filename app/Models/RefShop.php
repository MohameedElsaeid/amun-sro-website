<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShop query()
 * @mixin \Eloquent
 */
class RefShop extends Model
{
    public $timestamps = false;
    protected $table = '_RefShop';
    protected $fillable = [
        'Service', 'Country', 'ID', 'CodeName128', 'Param1', 'Param1_Desc128', 'Param2', 'Param2_Desc128', 'Param3', 'Param3_Desc128', 'Param4', 'Param4_Desc128'
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
