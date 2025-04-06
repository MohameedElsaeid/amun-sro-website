<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefTriggerCategory newModelQuery()
 * @method static Builder<static>|RefTriggerCategory newQuery()
 * @method static Builder<static>|RefTriggerCategory query()
 * @mixin Eloquent
 */
class RefTriggerCategory extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerCategory';
    protected $fillable = [
        'Service', 'ID', 'CodeName128', 'ObjName128', 'IndexNumber'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'IndexNumber' => 'integer',
    ];
    protected $connection = 'proxy';
}
