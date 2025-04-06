<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SiegeFortressStruct newModelQuery()
 * @method static Builder<static>|SiegeFortressStruct newQuery()
 * @method static Builder<static>|SiegeFortressStruct query()
 * @mixin Eloquent
 */
class SiegeFortressStruct extends Model
{
    public $timestamps = false;
    protected $table = '_SiegeFortressStruct';
    protected $fillable = [
        'FortressID', 'OwnerGuildID', 'RefEventStructID', 'RefObjID', 'HP', 'MakeDate', 'State'
    ];

    protected $casts = [
        'FortressID' => 'integer',
        'OwnerGuildID' => 'integer',
        'RefEventStructID' => 'integer',
        'RefObjID' => 'integer',
        'HP' => 'integer',
        'MakeDate' => 'datetime',
        'State' => 'integer',
    ];
    protected $connection = 'proxy';
}
