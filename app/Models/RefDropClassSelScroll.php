<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefDropClassSelScroll newModelQuery()
 * @method static Builder<static>|RefDropClassSelScroll newQuery()
 * @method static Builder<static>|RefDropClassSelScroll query()
 * @mixin Eloquent
 */
class RefDropClassSelScroll extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropClassSel_Scroll';
    protected $fillable = [
        'MonLevel', 'ProbGroup1', 'ProbGroup2', 'ProbGroup3'
    ];

    protected $casts = [
        'MonLevel' => 'integer',
        'ProbGroup1' => 'float',
        'ProbGroup2' => 'float',
        'ProbGroup3' => 'float',
    ];
    protected $connection = 'proxy';
}
