<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefDropClassSelEquip newModelQuery()
 * @method static Builder<static>|RefDropClassSelEquip newQuery()
 * @method static Builder<static>|RefDropClassSelEquip query()
 * @mixin Eloquent
 */
class RefDropClassSelEquip extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropClassSel_Equip';
    protected $fillable = [
        'MonLevel', 'ProbGroup1', 'ProbGroup2', 'ProbGroup3', 'ProbGroup4', 'ProbGroup5', 'ProbGroup6', 'ProbGroup7', 'ProbGroup8', 'ProbGroup9', 'ProbGroup10', 'ProbGroup11', 'ProbGroup12', 'ProbGroup13', 'ProbGroup14', 'ProbGroup15', 'ProbGroup16', 'ProbGroup17', 'ProbGroup18', 'ProbGroup19', 'ProbGroup20', 'ProbGroup21', 'ProbGroup22', 'ProbGroup23', 'ProbGroup24', 'ProbGroup25', 'ProbGroup26', 'ProbGroup27', 'ProbGroup28', 'ProbGroup29', 'ProbGroup30', 'ProbGroup31', 'ProbGroup32', 'ProbGroup33', 'ProbGroup34', 'ProbGroup35', 'ProbGroup36'
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
        'ProbGroup15' => 'float',
        'ProbGroup16' => 'float',
        'ProbGroup17' => 'float',
        'ProbGroup18' => 'float',
        'ProbGroup19' => 'float',
        'ProbGroup20' => 'float',
        'ProbGroup21' => 'float',
        'ProbGroup22' => 'float',
        'ProbGroup23' => 'float',
        'ProbGroup24' => 'float',
        'ProbGroup25' => 'float',
        'ProbGroup26' => 'float',
        'ProbGroup27' => 'float',
        'ProbGroup28' => 'float',
        'ProbGroup29' => 'float',
        'ProbGroup30' => 'float',
        'ProbGroup31' => 'float',
        'ProbGroup32' => 'float',
        'ProbGroup33' => 'float',
        'ProbGroup34' => 'float',
        'ProbGroup35' => 'float',
        'ProbGroup36' => 'float',
    ];
    protected $connection = 'proxy';
}
