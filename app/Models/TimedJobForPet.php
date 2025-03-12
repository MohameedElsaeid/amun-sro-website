<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimedJobForPet extends Model
{
    public $timestamps = false;
    protected $table = '_TimedJobForPet';
    protected $fillable = [
        'ID', 'CharID', 'Category', 'JobID', 'TimeToKeep', 'Data1', 'Data2', 'Data3', 'Data4', 'Data5', 'Data6', 'Data7', 'Data8', 'Serial64', 'JID'
    ];

    protected $casts = [
        'ID' => 'integer',
        'CharID' => 'integer',
        'Category' => 'integer',
        'JobID' => 'integer',
        'TimeToKeep' => 'integer',
        'Data1' => 'integer',
        'Data2' => 'integer',
        'Data3' => 'integer',
        'Data4' => 'integer',
        'Data5' => 'integer',
        'Data6' => 'integer',
        'Data7' => 'integer',
        'Data8' => 'integer',
        'Serial64' => 'integer',
        'JID' => 'integer',
    ];
}
