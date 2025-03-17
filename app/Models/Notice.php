<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    public $timestamps = false;
    protected $table = '_Notice';
    protected $fillable = [
        'ID', 'ContentID', 'Subject', 'Article', 'EditDate'
    ];

    protected $casts = [
        'ID' => 'integer',
        'ContentID' => 'integer',
        'EditDate' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
