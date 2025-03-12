<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RenameLogChar extends Model
{
    public $timestamps = false;
    protected $table = '_RenameLog_Char';
    protected $fillable = [
        'ID', 'CharID', 'OldName', 'NewName', 'Time'
    ];

    protected $casts = [
        'ID' => 'integer',
        'CharID' => 'integer',
        'Time' => 'datetime',
    ];
}
