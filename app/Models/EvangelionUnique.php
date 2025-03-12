<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvangelionUnique extends Model
{
    public $timestamps = false;
    protected $table = 'Evangelion_uniques';
    protected $fillable = [
        'ID', 'CharName', 'MobName', 'time'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
}
