<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SrcmsNewscomment extends Model
{
    public $timestamps = false;
    protected $table = 'srcms_newscomments';
    protected $fillable = [
        'newsID', 'author', 'text', 'time'
    ];

    protected $casts = [
        'newsID' => 'integer',
        'time' => 'datetime',
    ];
}
