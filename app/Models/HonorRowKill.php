<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HonorRowKill extends Model
{
    public $timestamps = false;
    protected $table = '_HonorRowKills';
    protected $fillable = [
        'ID', 'Kesen', 'Kesilen', 'DescType'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Kesen' => 'integer',
        'Kesilen' => 'integer',
        'DescType' => 'integer',
    ];
}
