<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopObject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopObject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopObject query()
 * @mixin \Eloquent
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
