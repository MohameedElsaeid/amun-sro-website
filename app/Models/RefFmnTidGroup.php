<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefFmnTidGroup newModelQuery()
 * @method static Builder<static>|RefFmnTidGroup newQuery()
 * @method static Builder<static>|RefFmnTidGroup query()
 * @mixin Eloquent
 */
class RefFmnTidGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefFmnTidGroup';
    protected $fillable = [
        'TidGroupID', 'TidGroupName'
    ];

    protected $casts = [
        'TidGroupID' => 'integer',
    ];
    protected $connection = 'proxy';
}
