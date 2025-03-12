<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiegeFortressRequest extends Model
{
    public $timestamps = false;
    protected $table = '_SiegeFortressRequest';
    protected $fillable = [
        'FortressID', 'GuildID', 'RequestType'
    ];

    protected $casts = [
        'FortressID' => 'integer',
        'GuildID' => 'integer',
        'RequestType' => 'integer',
    ];
}
