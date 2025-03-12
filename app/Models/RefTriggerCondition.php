<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTriggerCondition extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerCondition';
    protected $fillable = [
        'Service', 'ID', 'RefTriggerCommonID', 'OnTrue', 'OnFalse', 'Sequence', 'ParamGroupCodeName128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'RefTriggerCommonID' => 'integer',
        'Sequence' => 'integer',
    ];
}
