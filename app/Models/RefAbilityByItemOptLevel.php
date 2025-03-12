<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefAbilityByItemOptLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefAbilityByItemOptLevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefAbilityByItemOptLevel query()
 * @mixin \Eloquent
 */
class RefAbilityByItemOptLevel extends Model
{
    public $timestamps = false;
    protected $table = '_RefAbilityByItemOptLevel';
    protected $fillable = [
        'Service', 'ID', 'RefItemID', 'ItemOptLevel'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'RefItemID' => 'integer',
        'ItemOptLevel' => 'integer',
    ];
}
