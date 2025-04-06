<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefDropClassSelCure newModelQuery()
 * @method static Builder<static>|RefDropClassSelCure newQuery()
 * @method static Builder<static>|RefDropClassSelCure query()
 * @mixin Eloquent
 */
class RefDropClassSelCure extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropClassSel_Cure';
    protected $fillable = [
        'MonLevel', 'ProbGroup1', 'ProbGroup2', 'ProbGroup3', 'ProbGroup4', 'ProbGroup5', 'ProbGroup6', 'ProbGroup7', 'ProbGroup8', 'ProbGroup9', 'ProbGroup10', 'ProbGroup11', 'ProbGroup12', 'ProbGroup13', 'ProbGroup14'
    ];

    protected $casts = [
        'MonLevel' => 'integer',
        'ProbGroup1' => 'float',
        'ProbGroup2' => 'float',
        'ProbGroup3' => 'float',
        'ProbGroup4' => 'float',
        'ProbGroup5' => 'float',
        'ProbGroup6' => 'float',
        'ProbGroup7' => 'float',
        'ProbGroup8' => 'float',
        'ProbGroup9' => 'float',
        'ProbGroup10' => 'float',
        'ProbGroup11' => 'float',
        'ProbGroup12' => 'float',
        'ProbGroup13' => 'float',
        'ProbGroup14' => 'float',
    ];
    protected $connection = 'proxy';
}
