<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerConditionParam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerConditionParam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerConditionParam query()
 * @mixin \Eloquent
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
}
