<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefGameWorldGroup newModelQuery()
 * @method static Builder<static>|RefGameWorldGroup newQuery()
 * @method static Builder<static>|RefGameWorldGroup query()
 * @mixin Eloquent
 */
class RefGameWorldGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefGameWorldGroup';
    protected $fillable = [
        'ID', 'CodeName128', 'ObjName128', 'ConfigGroupCodeName128'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';
}
