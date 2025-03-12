<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayOp extends Model
{
    public $timestamps = false;
    protected $table = '_PayOp';
    protected $fillable = [
        'ID', 'UserJID', 'Amount', 'Status'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'Amount' => 'integer',
        'Status' => 'boolean',
    ];
}
