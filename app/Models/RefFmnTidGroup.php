<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefFmnTidGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefFmnTidGroup';
    protected $fillable = [
        'TidGroupID', 'TidGroupName'
    ];

    protected $casts = [
        'TidGroupID' => 'integer',
    ];
}
