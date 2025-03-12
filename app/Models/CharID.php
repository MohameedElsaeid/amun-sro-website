<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharID extends Model
{
    public $timestamps = false;
    protected $table = 'CharID';
    protected $fillable = [
        'ID'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
}
