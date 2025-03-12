<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldBindTriggerCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldBindTriggerCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldBindTriggerCategory query()
 * @mixin \Eloquent
 */
class RefGameWorldBindTriggerCategory extends Model
{
    public $timestamps = false;
    protected $table = '_RefGameWorldBindTriggerCategory';
    protected $fillable = [
        'Service', 'ID', 'GameWorldID', 'TriggerCategoryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'GameWorldID' => 'integer',
        'TriggerCategoryID' => 'integer',
    ];
}
