<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerBindCondition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerBindCondition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerBindCondition query()
 * @mixin \Eloquent
 */
class RefTriggerBindCondition extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerBindCondition';
    protected $fillable = [
        'Service', 'ID', 'TriggerID', 'TriggerConditionID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'TriggerID' => 'integer',
        'TriggerConditionID' => 'integer',
    ];
}
