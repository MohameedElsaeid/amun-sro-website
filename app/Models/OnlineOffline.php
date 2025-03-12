<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OnlineOffline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OnlineOffline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OnlineOffline query()
 * @mixin \Eloquent
 */
class OnlineOffline extends Model
{
    public $timestamps = false;
    protected $table = '_OnlineOffline';
    protected $fillable = [
        'No.', 'CharID', 'Charname', 'Status', 'Date', 'Minutes', 'tMinutes', 'eSilk', 'mOnline', 'Silk/Hour', 'stillOnline@'
    ];

    protected $casts = [
        'No.' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
        'Minutes' => 'integer',
        'tMinutes' => 'integer',
        'eSilk' => 'integer',
        'Silk/Hour' => 'integer',
        'stillOnline@' => 'datetime',
    ];
}
