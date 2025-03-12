<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteLink extends Model
{
    public $timestamps = false;
    protected $table = 'vote_links';
    protected $fillable = [
        'ID', 'Link', 'Img', 'Time', 'Reward'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Time' => 'integer',
        'Reward' => 'integer',
    ];
}
