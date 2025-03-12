<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteAction extends Model
{
    public $timestamps = false;
    protected $table = 'vote_actions';
    protected $fillable = [
        'Username', 'Status', 'VoteID', 'Date'
    ];

    protected $casts = [
        'Status' => 'integer',
        'VoteID' => 'integer',
        'Date' => 'integer',
    ];
}
