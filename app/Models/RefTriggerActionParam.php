<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefTriggerActionParam newModelQuery()
 * @method static Builder<static>|RefTriggerActionParam newQuery()
 * @method static Builder<static>|RefTriggerActionParam query()
 * @mixin Eloquent
 */
class RefTriggerActionParam extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerActionParam';
    protected $fillable = [
        'Service', 'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';
}
