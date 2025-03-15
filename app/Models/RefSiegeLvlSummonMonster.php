<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeLvlSummonMonster newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeLvlSummonMonster newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeLvlSummonMonster query()
 * @mixin \Eloquent
 */
class RefSiegeLvlSummonMonster extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeLvlSummonMonster';
    protected $fillable = [
        'Service', 'RefObjID', 'RefOrgObjID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'RefObjID' => 'integer',
        'RefOrgObjID' => 'integer',
    ];
    protected $connection = 'proxy';
}
