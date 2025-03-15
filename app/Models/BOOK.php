<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BOOK extends Model
{
    public $timestamps = false;
    protected $table = 'BOOKS';
    protected $fillable = [
        'title', 'pubdate', 'synopsis', 'inprint', 'salesCount'
    ];

    protected $casts = [
        'pubdate' => 'datetime',
        'inprint' => 'boolean',
        'salesCount' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
