<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefTriggerBindCondition newModelQuery()
 * @method static Builder<static>|RefTriggerBindCondition newQuery()
 * @method static Builder<static>|RefTriggerBindCondition query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
