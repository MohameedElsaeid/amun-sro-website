<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldGroupConfig newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldGroupConfig newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldGroupConfig query()
 * @mixin \Eloquent
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
