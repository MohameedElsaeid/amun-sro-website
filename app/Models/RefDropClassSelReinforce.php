<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefDropClassSelReinforce newModelQuery()
 * @method static Builder<static>|RefDropClassSelReinforce newQuery()
 * @method static Builder<static>|RefDropClassSelReinforce query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
