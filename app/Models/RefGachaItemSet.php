<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefGachaItemSet extends Model
{
    public $timestamps = false;
    protected $table = '_RefGachaItemSet';
    protected $fillable = [
        'Service', 'Set_ID', 'RefItemID', 'Ratio', 'Count', 'GachaID', 'Visible', 'param1', 'param1_Desc128', 'param2', 'param2_Desc128', 'param3', 'param3_Desc128', 'param4', 'param4_Desc128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'Set_ID' => 'integer',
        'RefItemID' => 'integer',
        'Ratio' => 'integer',
        'Count' => 'integer',
        'GachaID' => 'integer',
        'Visible' => 'integer',
        'param1' => 'integer',
        'param2' => 'integer',
        'param3' => 'integer',
        'param4' => 'integer',
    ];
}
