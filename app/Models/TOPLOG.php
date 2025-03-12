<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TOPLOG newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TOPLOG newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TOPLOG query()
 * @mixin \Eloquent
 */
class TOPLOG extends Model
{
    public $timestamps = false;
    protected $table = 'TOPLOG';
    protected $fillable = [
        'No.', 'CharID', 'Charname', 'Date'
    ];

    protected $casts = [
        'No.' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
    ];
}
