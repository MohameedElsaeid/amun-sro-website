<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefCharDefaultQuest extends Model
{
    public $timestamps = false;
    protected $table = '_RefCharDefault_Quest';
    protected $fillable = [
        'Service', 'ID', 'Race', 'CodeName', 'RequiredLevel'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'Race' => 'integer',
        'RequiredLevel' => 'integer',
    ];
}
