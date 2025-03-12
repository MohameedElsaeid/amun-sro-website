<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelAmmo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelAmmo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelAmmo query()
 * @mixin \Eloquent
 */
class RefDropClassSelAmmo extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropClassSel_Ammo';
    protected $fillable = [
        'MonLevel', 'ProbGroup1', 'ProbGroup2', 'ProbGroup3', 'ProbGroup4', 'ProbGroup5', 'ProbGroup6'
    ];

    protected $casts = [
        'MonLevel' => 'integer',
        'ProbGroup1' => 'float',
        'ProbGroup2' => 'float',
        'ProbGroup3' => 'float',
        'ProbGroup4' => 'float',
        'ProbGroup5' => 'float',
        'ProbGroup6' => 'float',
    ];
}
