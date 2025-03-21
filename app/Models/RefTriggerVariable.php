<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefTriggerVariable newModelQuery()
 * @method static Builder<static>|RefTriggerVariable newQuery()
 * @method static Builder<static>|RefTriggerVariable query()
 * @mixin Eloquent
 */
class RefTriggerVariable extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerVariable';
    protected $fillable = [
        'Service', 'ID', 'BindTriggerID', 'CodeName128', 'Type', 'Value', 'Comment128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'BindTriggerID' => 'integer',
        'Value' => 'integer',
    ];
    protected $connection = 'proxy';
}
