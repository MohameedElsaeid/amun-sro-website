<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JID extends Model
{
    public $timestamps = false;
    protected $table = 'JID';
    protected $fillable = [
        'ID'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
}
