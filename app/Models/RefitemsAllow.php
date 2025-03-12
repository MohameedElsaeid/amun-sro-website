<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefitemsAllow extends Model
{
    public $timestamps = false;
    protected $table = '_RefitemsAllow';
    protected $fillable = [
        'RefItemID'
    ];

    protected $casts = [
        'RefItemID' => 'integer',
    ];
}
