<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefShardContentConfig extends Model
{
    public $timestamps = false;
    protected $table = '_RefShardContentConfig';
    protected $fillable = [
        'Service', 'ID', 'CodeName128', 'CodeDesc128', 'Value', 'Type'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
    ];
}
