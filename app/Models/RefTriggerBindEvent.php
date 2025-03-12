<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerBindEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerBindEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerBindEvent query()
 * @mixin \Eloquent
 */
class RefTriggerBindEvent extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerBindEvent';
    protected $fillable = [
        'Service', 'ID', 'TriggerID', 'TriggerEventID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'TriggerID' => 'integer',
        'TriggerEventID' => 'integer',
    ];
}
