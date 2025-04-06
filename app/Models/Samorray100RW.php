<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Samorray100RW newModelQuery()
 * @method static Builder<static>|Samorray100RW newQuery()
 * @method static Builder<static>|Samorray100RW query()
 * @mixin Eloquent
 */
class Samorray100RW extends Model
{
    public $timestamps = false;
    protected $table = '_Samorray_100_RW';
    protected $fillable = [
        'CharID', 'CurLevel', 'Charname', 'charjid', 'hwid'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'CurLevel' => 'integer',
        'charjid' => 'integer',
    ];
    protected $connection = 'log';
}
