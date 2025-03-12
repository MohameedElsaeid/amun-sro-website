<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopItemGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopItemGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopItemGroup query()
 * @mixin \Eloquent
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
}
