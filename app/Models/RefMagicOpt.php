<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMagicOpt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMagicOpt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefMagicOpt query()
 * @mixin \Eloquent
 */
class RefMagicOpt extends Model
{
    public $timestamps = false;
    protected $table = '_RefMagicOpt';
    protected $fillable = [
        'Service', 'ID', 'MOptName128', 'AttrType', 'MLevel', 'Prob', 'Weight', 'Param1', 'Param2', 'Param3', 'Param4', 'Param5', 'Param6', 'Param7', 'Param8', 'Param9', 'Param10', 'Param11', 'Param12', 'Param13', 'Param14', 'Param15', 'Param16', 'ExcFunc1', 'ExcFunc2', 'ExcFunc3', 'ExcFunc4', 'ExcFunc5', 'ExcFunc6', 'AvailItemGroup1', 'ReqClass1', 'AvailItemGroup2', 'ReqClass2', 'AvailItemGroup3', 'ReqClass3', 'AvailItemGroup4', 'ReqClass4', 'AvailItemGroup5', 'ReqClass5', 'AvailItemGroup6', 'ReqClass6', 'AvailItemGroup7', 'ReqClass7', 'AvailItemGroup8', 'ReqClass8', 'AvailItemGroup9', 'ReqClass9', 'AvailItemGroup10', 'ReqClass10'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'MLevel' => 'integer',
        'Prob' => 'float',
        'Weight' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
        'Param5' => 'integer',
        'Param6' => 'integer',
        'Param7' => 'integer',
        'Param8' => 'integer',
        'Param9' => 'integer',
        'Param10' => 'integer',
        'Param11' => 'integer',
        'Param12' => 'integer',
        'Param13' => 'integer',
        'Param14' => 'integer',
        'Param15' => 'integer',
        'Param16' => 'integer',
        'ExcFunc1' => 'integer',
        'ExcFunc2' => 'integer',
        'ExcFunc3' => 'integer',
        'ExcFunc4' => 'integer',
        'ExcFunc5' => 'integer',
        'ExcFunc6' => 'integer',
        'ReqClass1' => 'integer',
        'ReqClass2' => 'integer',
        'ReqClass3' => 'integer',
        'ReqClass4' => 'integer',
        'ReqClass5' => 'integer',
        'ReqClass6' => 'integer',
        'ReqClass7' => 'integer',
        'ReqClass8' => 'integer',
        'ReqClass9' => 'integer',
        'ReqClass10' => 'integer',
    ];
}
