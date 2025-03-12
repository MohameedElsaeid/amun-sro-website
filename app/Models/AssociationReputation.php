<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
