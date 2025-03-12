<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleVersionFile extends Model
{
    public $timestamps = false;
    protected $table = '_ModuleVersionFile';
    protected $fillable = [
        'nID', 'nVersion', 'nDivisionID', 'nContentID', 'nModuleID', 'szFilename', 'szPath', 'nFileSize', 'nFileType', 'nFileTypeVersion', 'nToBePacked', 'timeModified', 'nValid'
    ];

    protected $casts = [
        'nID' => 'integer',
        'nVersion' => 'integer',
        'nDivisionID' => 'integer',
        'nContentID' => 'integer',
        'nModuleID' => 'integer',
        'nFileSize' => 'integer',
        'nFileType' => 'integer',
        'nFileTypeVersion' => 'integer',
        'nToBePacked' => 'integer',
        'timeModified' => 'datetime',
        'nValid' => 'integer',
    ];
}
