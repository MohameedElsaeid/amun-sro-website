<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestItemTNET extends Model
{
    public $timestamps = false;
    protected $table = 'test_item_TNET';
    protected $fillable = [
        'CodeName'
    ];

    protected $casts = [
    ];
}
