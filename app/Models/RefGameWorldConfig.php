<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefGameWorldConfig newModelQuery()
 * @method static Builder<static>|RefGameWorldConfig newQuery()
 * @method static Builder<static>|RefGameWorldConfig query()
 * @mixin Eloquent
 */
class RefGameWorldConfig extends Model
{
    public $timestamps = false;
    protected $table = '_RefGame_World_Config';
    protected $fillable = [
        'Service', 'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';
}
