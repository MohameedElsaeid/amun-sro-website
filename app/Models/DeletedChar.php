<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeletedChar extends Model
{
    public $timestamps = false;
    protected $table = '_DeletedChar';
    protected $fillable = [
        'CharID', 'UserJID', 'DeletedDate'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'UserJID' => 'integer',
        'DeletedDate' => 'datetime',
    ];
}
