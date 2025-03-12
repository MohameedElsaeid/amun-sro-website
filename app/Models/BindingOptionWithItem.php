<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BindingOptionWithItem extends Model
{
    public $timestamps = false;
    protected $table = '_BindingOptionWithItem';
    protected $fillable = [
        'nItemDBID', 'bOptType', 'nSlot', 'nOptID', 'nOptLvl', 'nOptValue', 'nParam1', 'nParam2'
    ];

    protected $casts = [
        'nItemDBID' => 'integer',
        'bOptType' => 'integer',
        'nSlot' => 'integer',
        'nOptID' => 'integer',
        'nOptLvl' => 'integer',
        'nOptValue' => 'integer',
        'nParam1' => 'integer',
        'nParam2' => 'integer',
    ];
}
