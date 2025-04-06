<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefTriggerEvent newModelQuery()
 * @method static Builder<static>|RefTriggerEvent newQuery()
 * @method static Builder<static>|RefTriggerEvent query()
 * @mixin Eloquent
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
