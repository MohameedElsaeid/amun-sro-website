<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerBindAction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerBindAction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerBindAction query()
 * @mixin \Eloquent
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
}
