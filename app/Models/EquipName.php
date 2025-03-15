<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EquipName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EquipName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EquipName query()
 * @mixin \Eloquent
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
