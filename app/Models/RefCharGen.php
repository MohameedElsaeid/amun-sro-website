<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharGen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharGen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharGen query()
 * @mixin \Eloquent
 */
class RefCharGen extends Model
{
    public $timestamps = false;
    protected $table = '_RefCharGen';
    protected $fillable = [
        'Service', 'RefObjID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'RefObjID' => 'integer',
    ];
    protected $connection = 'proxy';
}
