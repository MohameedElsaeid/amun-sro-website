<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefDropOptLvlSel newModelQuery()
 * @method static Builder<static>|RefDropOptLvlSel newQuery()
 * @method static Builder<static>|RefDropOptLvlSel query()
 * @mixin Eloquent
 */
class RefDropOptLvlSel extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropOptLvlSel';
    protected $fillable = [
        'OptLevel', 'Prob', 'ReqOnlineTime'
    ];

    protected $casts = [
        'OptLevel' => 'integer',
        'Prob' => 'float',
        'ReqOnlineTime' => 'integer',
    ];
    protected $connection = 'proxy';
}
