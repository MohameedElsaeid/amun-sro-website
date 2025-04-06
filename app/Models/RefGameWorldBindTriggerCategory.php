<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefGameWorldBindTriggerCategory newModelQuery()
 * @method static Builder<static>|RefGameWorldBindTriggerCategory newQuery()
 * @method static Builder<static>|RefGameWorldBindTriggerCategory query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
