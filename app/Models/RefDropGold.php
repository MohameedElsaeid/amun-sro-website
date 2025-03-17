<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropGold newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropGold newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropGold query()
 * @mixin \Eloquent
 */
class RefDropGold extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropGold';
    protected $fillable = [
        'MonLevel', 'DropProb', 'GoldMin', 'GoldMax'
    ];

    protected $casts = [
        'MonLevel' => 'integer',
        'DropProb' => 'float',
        'GoldMin' => 'integer',
        'GoldMax' => 'integer',
    ];
    protected $connection = 'proxy';
}
