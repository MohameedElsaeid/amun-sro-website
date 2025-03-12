<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogSEEKNDESTROYITEMFAST extends Model
{
    public $timestamps = false;
    protected $table = '_Log_SEEK_N_DESTROY_ITEM_FAST';
    protected $fillable = [
        'DeletedTime', 'OwnerType', 'OwnerID', 'ID64', 'CodeName', 'OptLevel', 'Variance', 'Data'
    ];

    protected $casts = [
        'DeletedTime' => 'datetime',
        'OwnerType' => 'integer',
        'OwnerID' => 'integer',
        'ID64' => 'integer',
        'OptLevel' => 'integer',
        'Variance' => 'integer',
        'Data' => 'integer',
    ];
}
