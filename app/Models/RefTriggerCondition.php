<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefTriggerCondition newModelQuery()
 * @method static Builder<static>|RefTriggerCondition newQuery()
 * @method static Builder<static>|RefTriggerCondition query()
 * @mixin Eloquent
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
