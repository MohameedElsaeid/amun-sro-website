<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropOptLvlSel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropOptLvlSel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropOptLvlSel query()
 * @mixin \Eloquent
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
