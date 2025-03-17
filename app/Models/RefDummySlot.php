<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDummySlot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDummySlot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDummySlot query()
 * @mixin \Eloquent
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
