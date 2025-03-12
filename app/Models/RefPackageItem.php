<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefPackageItem extends Model
{
    public $timestamps = false;
    protected $table = '_RefPackageItem';
    protected $fillable = [
        'Service', 'Country', 'ID', 'CodeName128', 'SaleTag', 'ExpandTerm', 'NameStrID', 'DescStrID', 'AssocFileIcon', 'Param1', 'Param1_Desc128', 'Param2', 'Param2_Desc128', 'Param3', 'Param3_Desc128', 'Param4', 'Param4_Desc128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Country' => 'integer',
        'ID' => 'integer',
        'SaleTag' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
    ];
}
