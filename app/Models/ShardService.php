<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShardService extends Model
{
    public $timestamps = false;
    protected $table = '_ShardService';
    protected $fillable = [
        'ShardID', 'ServiceType'
    ];

    protected $casts = [
        'ShardID' => 'integer',
        'ServiceType' => 'integer',
    ];
}
