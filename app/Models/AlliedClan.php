<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlliedClan extends Model
{
    public $timestamps = false;
    protected $table = '_AlliedClans';
    protected $fillable = [
        'ID', 'Ally1', 'Ally2', 'Ally3', 'Ally4', 'Ally5', 'Ally6', 'Ally7', 'Ally8', 'FoundationDate', 'LastCrestRev', 'CurCrestRev'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Ally1' => 'integer',
        'Ally2' => 'integer',
        'Ally3' => 'integer',
        'Ally4' => 'integer',
        'Ally5' => 'integer',
        'Ally6' => 'integer',
        'Ally7' => 'integer',
        'Ally8' => 'integer',
        'FoundationDate' => 'datetime',
        'LastCrestRev' => 'integer',
        'CurCrestRev' => 'integer',
    ];
}
