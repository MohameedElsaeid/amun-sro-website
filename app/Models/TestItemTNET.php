<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TestItemTNET newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TestItemTNET newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TestItemTNET query()
 * @mixin \Eloquent
 */
class TestItemTNET extends Model
{
    public $timestamps = false;
    protected $table = 'test_item_TNET';
    protected $fillable = [
        'CodeName'
    ];

    protected $casts = [
    ];
}
