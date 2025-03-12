<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCommon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCommon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefTriggerCommon query()
 * @mixin \Eloquent
 */
class RefTriggerCommon extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerCommon';
    protected $fillable = [
        'Service', 'ID', 'CodeName128', 'ObjName128', 'TID1', 'TID2', 'TID3', 'TID4'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'TID1' => 'integer',
        'TID2' => 'integer',
        'TID3' => 'integer',
        'TID4' => 'integer',
    ];
}
