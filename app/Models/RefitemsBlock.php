<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefitemsBlock extends Model
{
    public $timestamps = false;
    protected $table = '_RefitemsBlock';
    protected $fillable = [
        'RefItemID'
    ];

    protected $casts = [
        'RefItemID' => 'integer',
    ];
}
