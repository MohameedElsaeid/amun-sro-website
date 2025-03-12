<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityDescriptionGroupAssign extends Model
{
    public $timestamps = false;
    protected $table = '_SecurityDescriptionGroupAssign';
    protected $fillable = [
        'nGroupID', 'nDescriptionID'
    ];

    protected $casts = [
        'nGroupID' => 'integer',
        'nDescriptionID' => 'integer',
    ];
}
