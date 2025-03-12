<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SrcmsDownload extends Model
{
    public $timestamps = false;
    protected $table = 'srcms_downloads';
    protected $fillable = [
        'link', 'name', 'description'
    ];

    protected $casts = [
    ];
}
