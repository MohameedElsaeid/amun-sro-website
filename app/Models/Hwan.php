<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hwan extends Model
{
    public $timestamps = false;
    protected $table = 'Hwan';
    protected $fillable = [
        'Hwan_Level', 'Title', 'Race', 'lvl'
    ];

    protected $casts = [
        'Hwan_Level' => 'integer',
        'lvl' => 'integer',
    ];
}
