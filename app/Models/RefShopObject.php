<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefShopObject newModelQuery()
 * @method static Builder<static>|RefShopObject newQuery()
 * @method static Builder<static>|RefShopObject query()
 * @mixin Eloquent
 */
class RefShopObject extends Model
{
    public $timestamps = false;
    protected $table = '_RefShopObject';
    protected $fillable = [
        'ID', 'CodeName128'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';
}
