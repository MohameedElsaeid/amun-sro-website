<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Memo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Memo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Memo query()
 * @mixin \Eloquent
 */
class Memo extends Model
{
    public $timestamps = false;
    protected $table = '_Memo';
    protected $fillable = [
        'ID64', 'CharID', 'FromCharName', 'Message', 'Date', 'Status', 'RefObjID'
    ];

    protected $casts = [
        'ID64' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
        'Status' => 'integer',
        'RefObjID' => 'integer',
    ];
    protected $connection = 'proxy';
}
