<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountJID extends Model
{
    public $timestamps = false;
    protected $table = '_AccountJID';
    protected $fillable = [
        'AccountID', 'JID', 'Gold'
    ];

    protected $casts = [
        'JID' => 'integer',
        'Gold' => 'integer',
    ];
}
