<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefCharGen newModelQuery()
 * @method static Builder<static>|RefCharGen newQuery()
 * @method static Builder<static>|RefCharGen query()
 * @mixin Eloquent
 */
class RefCharGen extends Model
{
    public $timestamps = false;
    protected $table = '_RefCharGen';
    protected $fillable = [
        'Service', 'RefObjID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'RefObjID' => 'integer',
    ];
    protected $connection = 'proxy';
}
