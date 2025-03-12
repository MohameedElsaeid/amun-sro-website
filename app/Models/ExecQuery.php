<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExecQuery extends Model
{
    public $timestamps = false;
    protected $table = 'ExecQuery';
    protected $fillable = [
        'ID', 'Day', 'Time', 'DatabaseIndex', 'Query'
    ];

    protected $casts = [
        'ID' => 'integer',
        'DatabaseIndex' => 'integer',
    ];
}
