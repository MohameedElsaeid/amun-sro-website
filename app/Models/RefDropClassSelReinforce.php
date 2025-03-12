<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
