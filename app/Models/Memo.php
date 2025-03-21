<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Memo newModelQuery()
 * @method static Builder<static>|Memo newQuery()
 * @method static Builder<static>|Memo query()
 * @mixin Eloquent
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
