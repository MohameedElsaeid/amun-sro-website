<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefGameWorldGroupConfig newModelQuery()
 * @method static Builder<static>|RefGameWorldGroupConfig newQuery()
 * @method static Builder<static>|RefGameWorldGroupConfig query()
 * @mixin Eloquent
 */
class RefGameWorldGroupConfig extends Model
{
    public $timestamps = false;
    protected $table = '_RefGameWorldGroup_Config';
    protected $fillable = [
        'Service', 'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';
}
