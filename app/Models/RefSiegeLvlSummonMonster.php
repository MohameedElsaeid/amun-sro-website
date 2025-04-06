<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSiegeLvlSummonMonster newModelQuery()
 * @method static Builder<static>|RefSiegeLvlSummonMonster newQuery()
 * @method static Builder<static>|RefSiegeLvlSummonMonster query()
 * @mixin Eloquent
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
