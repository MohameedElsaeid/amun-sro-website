<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
