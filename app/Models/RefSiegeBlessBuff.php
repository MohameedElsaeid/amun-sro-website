<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefSiegeBlessBuff extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeBlessBuff';
    protected $fillable = [
        'Service', 'BlessID', 'FortressID', 'RefBlessBuffID', 'NeedGold', 'NeedGP'
    ];

    protected $casts = [
        'Service' => 'integer',
        'BlessID' => 'integer',
        'FortressID' => 'integer',
        'RefBlessBuffID' => 'integer',
        'NeedGold' => 'integer',
        'NeedGP' => 'integer',
    ];
}
