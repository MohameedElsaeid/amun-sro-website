<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefShopItemGroup newModelQuery()
 * @method static Builder<static>|RefShopItemGroup newQuery()
 * @method static Builder<static>|RefShopItemGroup query()
 * @mixin Eloquent
 */
class RefShopItemGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefShopItemGroup';
    protected $fillable = [
        'Service', 'GroupID', 'CodeName128', 'StrID128_Group'
    ];

    protected $casts = [
        'Service' => 'integer',
        'GroupID' => 'integer',
    ];
    protected $connection = 'proxy';
}
