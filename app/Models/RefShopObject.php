<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefShopObject extends Model
{
    public $timestamps = false;
    protected $table = '_RefShopObject';
    protected $fillable = [
        'ID', 'CodeName128'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
}
