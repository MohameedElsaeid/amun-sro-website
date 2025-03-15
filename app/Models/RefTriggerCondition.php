<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCondition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCondition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCondition query()
 * @mixin \Eloquent
 */
class RefTriggerCondition extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerCondition';
    protected $fillable = [
        'Service', 'ID', 'RefTriggerCommonID', 'OnTrue', 'OnFalse', 'Sequence', 'ParamGroupCodeName128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'RefTriggerCommonID' => 'integer',
        'Sequence' => 'integer',
    ];
    protected $connection = 'proxy';
}
