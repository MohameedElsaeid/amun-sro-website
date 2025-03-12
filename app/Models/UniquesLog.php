<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniquesLog extends Model
{
    public $timestamps = false;
    protected $table = '_UniquesLog';
    protected $fillable = [
        'ID', 'Type', 'CodeName128', 'Killer', 'Date'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Type' => 'integer',
    ];
}
