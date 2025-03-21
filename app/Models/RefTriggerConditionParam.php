<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefTriggerConditionParam newModelQuery()
 * @method static Builder<static>|RefTriggerConditionParam newQuery()
 * @method static Builder<static>|RefTriggerConditionParam query()
 * @mixin Eloquent
 */
class RefTriggerConditionParam extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerConditionParam';
    protected $fillable = [
        'Service', 'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';
}
