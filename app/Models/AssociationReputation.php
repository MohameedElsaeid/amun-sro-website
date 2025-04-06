<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|AssociationReputation newModelQuery()
 * @method static Builder<static>|AssociationReputation newQuery()
 * @method static Builder<static>|AssociationReputation query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
