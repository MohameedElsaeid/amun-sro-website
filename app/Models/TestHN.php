<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestHN extends Model
{
    public $timestamps = false;
    protected $table = 'Test_HN';
    protected $fillable = [
        'STT', 'Username', 'CodeCB', 'H?', 'T�n', 'Email', 'password', 'F_ONLINE'
    ];

    protected $casts = [
        'STT' => 'float',
        'F_ONLINE' => 'float',
    ];
}
