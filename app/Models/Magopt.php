<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magopt extends Model
{
    public $timestamps = false;
    protected $table = '_Magopt';
    protected $fillable = [
        'name', 'desc', 'mLevel', 'extension', 'sortkey'
    ];

    protected $casts = [
        'mLevel' => 'integer',
        'sortkey' => 'integer',
    ];
}
