<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefDropGold newModelQuery()
 * @method static Builder<static>|RefDropGold newQuery()
 * @method static Builder<static>|RefDropGold query()
 * @mixin Eloquent
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
