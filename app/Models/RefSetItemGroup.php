<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSetItemGroup newModelQuery()
 * @method static Builder<static>|RefSetItemGroup newQuery()
 * @method static Builder<static>|RefSetItemGroup query()
 * @mixin Eloquent
 */
class RefSetItemGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefSetItemGroup';
    protected $fillable = [
        'Service', 'ID', 'CodeName128', 'ObjName128', 'NameStrID128', 'DescStrID128', 'SetEffectMask', 'SetMagicMask', '2SetMOptGroupID', '3SetMOptGroupID', '4SetMOptGroupID', '5SetMOptGroupID', '6SetMOptGroupID', '7SetMOptGroupID', '8SetMOptGroupID', '9SetMOptGroupID', '10SetMOptGroupID', '11SetMOptGroupID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'SetEffectMask' => 'integer',
        'SetMagicMask' => 'integer',
        '2SetMOptGroupID' => 'integer',
        '3SetMOptGroupID' => 'integer',
        '4SetMOptGroupID' => 'integer',
        '5SetMOptGroupID' => 'integer',
        '6SetMOptGroupID' => 'integer',
        '7SetMOptGroupID' => 'integer',
        '8SetMOptGroupID' => 'integer',
        '9SetMOptGroupID' => 'integer',
        '10SetMOptGroupID' => 'integer',
        '11SetMOptGroupID' => 'integer',
    ];
    protected $connection = 'proxy';
}
