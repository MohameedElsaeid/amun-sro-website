<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefGachaCode newModelQuery()
 * @method static Builder<static>|RefGachaCode newQuery()
 * @method static Builder<static>|RefGachaCode query()
 * @mixin Eloquent
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
