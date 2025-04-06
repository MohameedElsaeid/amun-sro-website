<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TestItemTNET newModelQuery()
 * @method static Builder<static>|TestItemTNET newQuery()
 * @method static Builder<static>|TestItemTNET query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
