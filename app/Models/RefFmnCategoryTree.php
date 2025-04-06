<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefFmnCategoryTree newModelQuery()
 * @method static Builder<static>|RefFmnCategoryTree newQuery()
 * @method static Builder<static>|RefFmnCategoryTree query()
 * @mixin Eloquent
 */
class RefFmnCategoryTree extends Model
{
    public $timestamps = false;
    protected $table = '_RefFmnCategoryTree';
    protected $fillable = [
        'Service', 'CategoryName', 'StringID', 'ParentCategoryName', 'TidGroupID', 'Degree'
    ];

    protected $casts = [
        'Service' => 'integer',
        'TidGroupID' => 'integer',
        'Degree' => 'integer',
    ];
    protected $connection = 'proxy';
}
