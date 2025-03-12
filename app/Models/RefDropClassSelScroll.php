<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelScroll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelScroll newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelScroll query()
 * @mixin \Eloquent
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
}
