<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteIp extends Model
{
    public $timestamps = false;
    protected $table = 'vote_ip';
    protected $fillable = [
        'IP', 'LastDate', 'VoteID'
    ];

    protected $casts = [
        'VoteID' => 'integer',
    ];
}
