<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRegion query()
 * @mixin \Eloquent
 */
class RefRegion extends Model
{
    public $timestamps = false;
    protected $table = '_RefRegion';
    protected $fillable = [
        'wRegionID', 'X', 'Z', 'ContinentName', 'AreaName', 'IsBattleField', 'Climate', 'MaxCapacity', 'AssocObjID', 'AssocServer', 'AssocFile256', 'LinkedRegion_1', 'LinkedRegion_2', 'LinkedRegion_3', 'LinkedRegion_4', 'LinkedRegion_5', 'LinkedRegion_6', 'LinkedRegion_7', 'LinkedRegion_8', 'LinkedRegion_9', 'LinkedRegion_10'
    ];

    protected $casts = [
        'wRegionID' => 'integer',
        'X' => 'integer',
        'Z' => 'integer',
        'IsBattleField' => 'integer',
        'Climate' => 'integer',
        'MaxCapacity' => 'integer',
        'AssocObjID' => 'integer',
        'AssocServer' => 'integer',
        'LinkedRegion_1' => 'integer',
        'LinkedRegion_2' => 'integer',
        'LinkedRegion_3' => 'integer',
        'LinkedRegion_4' => 'integer',
        'LinkedRegion_5' => 'integer',
        'LinkedRegion_6' => 'integer',
        'LinkedRegion_7' => 'integer',
        'LinkedRegion_8' => 'integer',
        'LinkedRegion_9' => 'integer',
        'LinkedRegion_10' => 'integer',
    ];
}
