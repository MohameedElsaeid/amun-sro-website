<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefGameWorldBindTriggerCategory extends Model
{
    public $timestamps = false;
    protected $table = '_RefGameWorldBindTriggerCategory';
    protected $fillable = [
        'Service', 'ID', 'GameWorldID', 'TriggerCategoryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'GameWorldID' => 'integer',
        'TriggerCategoryID' => 'integer',
    ];
}
