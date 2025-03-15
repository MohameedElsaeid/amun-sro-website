<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    protected $fillable = [
        'Email',
        'JID'
    ];
    protected $connection = 'sqlsrv';
}
