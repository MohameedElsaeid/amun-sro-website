<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefDummySlot newModelQuery()
 * @method static Builder<static>|RefDummySlot newQuery()
 * @method static Builder<static>|RefDummySlot query()
 * @mixin Eloquent
 */
class RefDummySlot extends Model
{
    public $timestamps = false;
    protected $table = '_RefDummySlot';
    protected $fillable = [
        'cnt'
    ];

    protected $casts = [
        'cnt' => 'integer',
    ];
    protected $connection = 'proxy';
}
