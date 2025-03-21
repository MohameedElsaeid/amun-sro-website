<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefMagicOptByItemOptLevel newModelQuery()
 * @method static Builder<static>|RefMagicOptByItemOptLevel newQuery()
 * @method static Builder<static>|RefMagicOptByItemOptLevel query()
 * @mixin Eloquent
 */
class RefMagicOptByItemOptLevel extends Model
{
    public $timestamps = false;
    protected $table = '_RefMagicOptByItemOptLevel';
    protected $fillable = [
        'Link', 'RefMagicOptID', 'MagicOptValue', 'TooltipType', 'TooltipCodename'
    ];

    protected $casts = [
        'Link' => 'integer',
        'RefMagicOptID' => 'integer',
        'MagicOptValue' => 'integer',
        'TooltipType' => 'integer',
    ];
    protected $connection = 'proxy';
}
