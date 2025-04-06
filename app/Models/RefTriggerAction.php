<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefTriggerAction newModelQuery()
 * @method static Builder<static>|RefTriggerAction newQuery()
 * @method static Builder<static>|RefTriggerAction query()
 * @mixin Eloquent
 */
class RefTriggerAction extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerAction';
    protected $fillable = [
        'Service', 'ID', 'RefTriggerCommonID', 'Delay', 'ParamGroupCodeName128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'RefTriggerCommonID' => 'integer',
        'Delay' => 'integer',
    ];
    protected $connection = 'proxy';
}
