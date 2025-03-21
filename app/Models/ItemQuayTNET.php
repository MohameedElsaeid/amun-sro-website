<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|ItemQuayTNET newModelQuery()
 * @method static Builder<static>|ItemQuayTNET newQuery()
 * @method static Builder<static>|ItemQuayTNET query()
 * @mixin Eloquent
 */
class ItemQuayTNET extends Model
{
    public $timestamps = false;
    protected $table = 'Item_Quay_TNET';
    protected $fillable = [
        'CodeName'
    ];

    protected $casts = [
    ];
    protected $connection = 'proxy';
}
