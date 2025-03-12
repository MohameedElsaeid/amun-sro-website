<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharNickNameList extends Model
{
    public $timestamps = false;
    protected $table = '_CharNickNameList';
    protected $fillable = [
        'NickName16', 'CharID'
    ];

    protected $casts = [
        'CharID' => 'integer',
    ];
}
