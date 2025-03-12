<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiegeFortressItemForge extends Model
{
    public $timestamps = false;
    protected $table = '_SiegeFortressItemForge';
    protected $fillable = [
        'FortressID', 'ItemRefID', 'Amount', 'Finished', 'StartDate', 'FinishDate'
    ];

    protected $casts = [
        'FortressID' => 'integer',
        'ItemRefID' => 'integer',
        'Amount' => 'integer',
        'Finished' => 'integer',
        'StartDate' => 'datetime',
        'FinishDate' => 'datetime',
    ];
}
