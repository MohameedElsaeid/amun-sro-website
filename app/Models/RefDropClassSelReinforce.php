<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelReinforce newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelReinforce newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelReinforce query()
 * @mixin \Eloquent
 */
class RefDropClassSelReinforce extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropClassSel_Reinforce';
    protected $fillable = [
        'MonLevel', 'ProbGroup1', 'ProbGroup2'
    ];

    protected $casts = [
        'MonLevel' => 'integer',
        'ProbGroup1' => 'float',
        'ProbGroup2' => 'float',
    ];
}
