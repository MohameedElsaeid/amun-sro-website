<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelAlchemyTablet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelAlchemyTablet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelAlchemyTablet query()
 * @mixin \Eloquent
 */
class RefDropClassSelAlchemyTablet extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropClassSel_Alchemy_Tablet';
    protected $fillable = [
        'MonLevel', 'ProbGroup1', 'ProbGroup2', 'ProbGroup3', 'ProbGroup4', 'ProbGroup5', 'ProbGroup6', 'ProbGroup7', 'ProbGroup8', 'ProbGroup9', 'ProbGroup10', 'ProbGroup11', 'ProbGroup12'
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
    ];
}
