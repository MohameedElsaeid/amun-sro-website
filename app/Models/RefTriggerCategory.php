<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCategory query()
 * @mixin \Eloquent
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
