<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGachaCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGachaCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGachaCode query()
 * @mixin \Eloquent
 */
class RefGachaCode extends Model
{
    public $timestamps = false;
    protected $table = '_RefGachaCode';
    protected $fillable = [
        'CodeName128', 'GachaSetID'
    ];

    protected $casts = [
        'GachaSetID' => 'integer',
    ];
    protected $connection = 'proxy';
}
