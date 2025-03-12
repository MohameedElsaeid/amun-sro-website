<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabRefSpawnToolVersion extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefSpawnToolVersion';
    protected $fillable = [
        'dwRefDataVersion', 'szVersionDescString'
    ];

    protected $casts = [
        'dwRefDataVersion' => 'integer',
    ];
}
