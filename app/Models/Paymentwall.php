<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paymentwall extends Model
{
    public $timestamps = false;
    protected $table = '_paymentwall';
    protected $fillable = [
        'JID', 'credits', 'date'
    ];

    protected $casts = [
        'JID' => 'integer',
        'credits' => 'integer',
        'date' => 'datetime',
    ];
}
