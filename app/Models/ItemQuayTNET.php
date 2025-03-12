<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemQuayTNET extends Model
{
    public $timestamps = false;
    protected $table = 'Item_Quay_TNET';
    protected $fillable = [
        'CodeName'
    ];

    protected $casts = [
    ];
}
