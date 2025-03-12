<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Migration extends Model
{
    public $timestamps = false;
    protected $table = 'migrations';
    protected $fillable = [
        'migration', 'batch'
    ];

    protected $casts = [
        'batch' => 'integer',
    ];
}
