<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTriggerAction extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerAction';
    protected $fillable = [
        'Service', 'ID', 'RefTriggerCommonID', 'Delay', 'ParamGroupCodeName128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'RefTriggerCommonID' => 'integer',
        'Delay' => 'integer',
    ];
}
