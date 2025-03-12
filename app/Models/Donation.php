<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public $timestamps = false;
    protected $table = '_Donation';
    protected $fillable = [
        'TransactionID', 'OfferID', 'TransactionSignature', 'TransactionType', 'UserJID', 'Username', 'Silk', 'Total', 'Date'
    ];

    protected $casts = [
        'OfferID' => 'integer',
        'UserJID' => 'integer',
        'Silk' => 'integer',
        'Total' => 'integer',
        'Date' => 'datetime',
    ];
}
