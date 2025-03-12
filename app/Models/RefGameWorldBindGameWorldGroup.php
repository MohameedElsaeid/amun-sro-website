<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefGameWorldBindGameWorldGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefGameWorldBindGameWorldGroup';
    protected $fillable = [
        'Service', 'ID', 'GameWorldID', 'GameWorldGroupID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'GameWorldID' => 'integer',
        'GameWorldGroupID' => 'integer',
    ];
}
