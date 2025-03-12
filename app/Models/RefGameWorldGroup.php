<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldGroup query()
 * @mixin \Eloquent
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
}
