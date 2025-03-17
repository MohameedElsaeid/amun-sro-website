<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerVariable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerVariable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerVariable query()
 * @mixin \Eloquent
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
