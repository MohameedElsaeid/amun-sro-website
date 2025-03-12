<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemsDrop extends Model
{
    public $timestamps = false;
    protected $table = '_ItemsDrop';
    protected $fillable = [
        'CharID', 'Serial64'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Serial64' => 'integer',
    ];
}
