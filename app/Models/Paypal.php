<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paypal extends Model
{
    public $timestamps = false;
    protected $table = 'paypal';
    protected $fillable = [
        'txn_id', 'payer_email', 'mc_gross', 'username', 'date'
    ];

    protected $casts = [
        'mc_gross' => 'float',
    ];
}
