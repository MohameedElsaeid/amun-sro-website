<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefDropItemAssign newModelQuery()
 * @method static Builder<static>|RefDropItemAssign newQuery()
 * @method static Builder<static>|RefDropItemAssign query()
 * @mixin Eloquent
 */
class RefDropItemAssign extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropItemAssign';
    protected $fillable = [
        'Service', 'RefItemID', 'Prob_Relative', 'Prob_Absolute', 'AssignedGroup', 'DropCount'
    ];

    protected $casts = [
        'Service' => 'integer',
        'RefItemID' => 'integer',
        'Prob_Relative' => 'integer',
        'Prob_Absolute' => 'integer',
        'AssignedGroup' => 'integer',
        'DropCount' => 'integer',
    ];
    protected $connection = 'proxy';
}
