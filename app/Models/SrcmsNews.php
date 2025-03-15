<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SrcmsNews extends Model
{
    public $timestamps = false;
    protected $table = 'srcms_news';
    protected $fillable = [
        'title', 'content', 'author', 'time'
    ];

    protected $casts = [
    ];
    protected $connection = 'sqlsrv';
}
