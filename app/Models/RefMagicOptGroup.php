<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefMagicOptGroup newModelQuery()
 * @method static Builder<static>|RefMagicOptGroup newQuery()
 * @method static Builder<static>|RefMagicOptGroup query()
 * @mixin Eloquent
 */
class RefMagicOptGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefMagicOptGroup';
    protected $fillable = [
        'Service', 'LinkID', 'MagicType', 'CodeName128', 'MOptID', 'MOptLevel', 'Value', 'Param1', 'Param1_Desc', 'Param2', 'Param2_Desc'
    ];

    protected $casts = [
        'Service' => 'integer',
        'LinkID' => 'integer',
        'MagicType' => 'integer',
        'MOptID' => 'integer',
        'MOptLevel' => 'integer',
        'Value' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
    ];
    protected $connection = 'proxy';
}
