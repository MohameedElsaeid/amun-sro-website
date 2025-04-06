<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefAbilityByItemOptLevel newModelQuery()
 * @method static Builder<static>|RefAbilityByItemOptLevel newQuery()
 * @method static Builder<static>|RefAbilityByItemOptLevel query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
