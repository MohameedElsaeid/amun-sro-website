<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefHWANLevel extends Model
{
    public $timestamps = false;
    protected $table = '_RefHWANLevel';
    protected $fillable = [
        'HwanLevel', 'ParamFourcc1', 'ParamValue1', 'ParamFourcc2', 'ParamValue2', 'ParamFourcc3', 'ParamValue3', 'ParamFourcc4', 'ParamValue4', 'ParamFourcc5', 'ParamValue5', 'AssocFileObj128', 'Title_CH70', 'Title_EU70'
    ];

    protected $casts = [
        'HwanLevel' => 'integer',
        'ParamFourcc1' => 'integer',
        'ParamValue1' => 'integer',
        'ParamFourcc2' => 'integer',
        'ParamValue2' => 'integer',
        'ParamFourcc3' => 'integer',
        'ParamValue3' => 'integer',
        'ParamFourcc4' => 'integer',
        'ParamValue4' => 'integer',
        'ParamFourcc5' => 'integer',
        'ParamValue5' => 'integer',
    ];
}
