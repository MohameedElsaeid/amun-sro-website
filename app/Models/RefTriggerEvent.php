<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerEvent query()
 * @mixin \Eloquent
 */
class RefTriggerEvent extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerEvent';
    protected $fillable = [
        'Service', 'ID', 'RefTriggerCommonID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'RefTriggerCommonID' => 'integer',
    ];
    protected $connection = 'proxy';
}
