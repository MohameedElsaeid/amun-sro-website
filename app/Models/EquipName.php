<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|EquipName newModelQuery()
 * @method static Builder<static>|EquipName newQuery()
 * @method static Builder<static>|EquipName query()
 * @mixin Eloquent
 */
class EquipName extends Model
{
    public $timestamps = false;
    protected $table = '_EquipName';
    protected $fillable = [
        'Service', 'TextString', 'EndTextString'
    ];

    protected $casts = [
    ];
    protected $connection = 'proxy';
}
