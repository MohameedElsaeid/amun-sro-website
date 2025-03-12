<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobRowsKill extends Model
{
    public $timestamps = false;
    protected $table = '_JobRowsKills';
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
