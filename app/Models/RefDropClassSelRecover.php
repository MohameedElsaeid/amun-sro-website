<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelRecover newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelRecover newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefDropClassSelRecover query()
 * @mixin \Eloquent
 */
class RefDropClassSelRecover extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropClassSel_Recover';
    protected $fillable = [
        'MonLevel', 'ProbGroup1', 'ProbGroup2', 'ProbGroup3', 'ProbGroup4', 'ProbGroup5', 'ProbGroup6', 'ProbGroup7'
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
    ];
    protected $connection = 'proxy';
}
