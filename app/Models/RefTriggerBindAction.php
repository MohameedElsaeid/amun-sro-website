<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefTriggerBindAction newModelQuery()
 * @method static Builder<static>|RefTriggerBindAction newQuery()
 * @method static Builder<static>|RefTriggerBindAction query()
 * @mixin Eloquent
 */
class RefTriggerBindAction extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerBindAction';
    protected $fillable = [
        'Service', 'ID', 'TriggerID', 'TriggerActionID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'TriggerID' => 'integer',
        'TriggerActionID' => 'integer',
    ];
    protected $connection = 'proxy';
}
