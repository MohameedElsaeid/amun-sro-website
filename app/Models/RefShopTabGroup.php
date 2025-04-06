<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefShopTabGroup newModelQuery()
 * @method static Builder<static>|RefShopTabGroup newQuery()
 * @method static Builder<static>|RefShopTabGroup query()
 * @mixin Eloquent
 */
class RefShopTabGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefShopTabGroup';
    protected $fillable = [
        'Service', 'Country', 'ID', 'CodeName128', 'StrID128_Group'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';
}
