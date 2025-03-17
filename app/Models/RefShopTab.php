<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopTab newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopTab newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShopTab query()
 * @mixin \Eloquent
 */
class RefShopTab extends Model
{
    public $timestamps = false;
    protected $table = '_RefShopTab';
    protected $fillable = [
        'Service', 'Country', 'ID', 'CodeName128', 'RefTabGroupCodeName', 'StrID128_Tab'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';
}
