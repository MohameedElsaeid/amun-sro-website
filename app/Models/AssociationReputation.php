<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssociationReputation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssociationReputation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AssociationReputation query()
 * @mixin \Eloquent
 */
class AssociationReputation extends Model
{
    public $timestamps = false;
    protected $table = '_AssociationReputation';
    protected $fillable = [
        'AssociationCodeName', 'AssociationTypeName', 'Reputation', 'PriorOccupation'
    ];

    protected $casts = [
        'Reputation' => 'integer',
        'PriorOccupation' => 'integer',
    ];
}
