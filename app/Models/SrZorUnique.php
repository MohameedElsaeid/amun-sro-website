<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SrZorUnique extends Model
{
    public $timestamps = false;
    protected $table = 'srZor_uniques';
    protected $fillable = [
        'ID', 'CharName', 'MobName', 'time'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
