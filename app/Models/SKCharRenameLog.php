<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKCharRenameLog extends Model
{
    public $timestamps = false;
    protected $table = 'SK_CharRenameLog';
    protected $fillable = [
        'JID', 'struserid', 'old_char', 'new_char', 'server', 'timechange'
    ];

    protected $casts = [
        'JID' => 'integer',
        'timechange' => 'datetime',
    ];
}
