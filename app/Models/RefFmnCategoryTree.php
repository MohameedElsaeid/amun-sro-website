<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefFmnCategoryTree extends Model
{
    public $timestamps = false;
    protected $table = '_RefFmnCategoryTree';
    protected $fillable = [
        'Service', 'CategoryName', 'StringID', 'ParentCategoryName', 'TidGroupID', 'Degree'
    ];

    protected $casts = [
        'Service' => 'integer',
        'TidGroupID' => 'integer',
        'Degree' => 'integer',
    ];
}
