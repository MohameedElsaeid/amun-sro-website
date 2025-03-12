<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTrigger extends Model
{
    public $timestamps = false;
    protected $table = '_RefTrigger';
    protected $fillable = [
        'Service', 'ID', 'CodeName128', 'IsActive', 'IsRepeat', 'Comment512', 'IndexNumber'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'IsActive' => 'integer',
        'IsRepeat' => 'integer',
        'IndexNumber' => 'integer',
    ];
}
